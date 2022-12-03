<?php

namespace App\Controllers\frontend;
use App\Models\frontend\Home_model;
use App\Models\frontend\Ui_model;
use App\Models\frontend\Info_model;
use App\Models\frontend\Shop_Category_model;
use App\Models\frontend\Shop_Slider_model;
use App\Models\frontend\Shop_Product_model;
use App\Models\frontend\Banner_model;
use App\Models\frontend\Option_model;
use App\Models\frontend\Page_model;
use App\Models\frontend\Seo_model;
use App\Models\frontend\Post_model;
use App\Models\frontend\City_model;
use App\Models\frontend\Shop_Customer_model;
use App\Models\frontend\Shop_Order_model;
use App\Models\frontend\User_model;

class ShopCart extends BaseController
{
    public $base; // for some data common
    function __construct()
    {
        $ui_md = new Ui_model();
        $info_md = new Info_model();
        $shop_category_md = new Shop_Category_model();
        $shop_slider_md = new Shop_Slider_model();
        $shop_product_md = new Shop_Product_model();
        $banner_md = new Banner_model();
        $option_md = new Option_model();
        $this->base = array(
            'ui' => $ui_md->getUi(),
            'info' => $info_md->getInfo(),
            'menu' => $shop_category_md->getShopCategory(),
            'slider' => $shop_slider_md->getSlider(),
            // arrivals product in homepage
            'mostsaleslick' => $shop_product_md->getArrivalsProduct(6),
            'arrivals' => $shop_product_md->getArrivalsProduct(3),
            'featured' => $shop_product_md->getFeaturedProduct(3),
            'mostsale' => $shop_product_md->getMostSaleProduct(3),
            'banner' => $banner_md->getbanner(),
        );     
    }

    public function order_info()
    {
        $session = session();
        
        $now = date('Y-m-d H:i:s');
        // $now =  $now->format('Y-m-d H:i:s');
        // trong trường hợp khách đã login
        
        if($session->get('customer_id')){
            $customer_id = $session->get('customer_id');
        }else{
            $customer_id = 0;
        }
        // Lấy session
        if($session->get('cart')){
            $cart=$session->get('cart');
        }

        $status = 0;
        $shop_product_md = new Shop_Product_model();
        $data = array();
        $total = 0;
        foreach($cart as $val){
            $product  = $shop_product_md->getShopProductIdInCart($val['id']);

            $product->qty = $val['qty'];
            if($now > $product->from_date && $now < $product->to_date){
                if($product->ratio != 0){
                    $product->price = $product->price - ($product->price/100)*$product->ratio;
                }elseif($product->ratio != 0){
                    $product->price = $product->price - $product->money;
                }
            }
            $product->total = $val['qty']*$product->price;

            $x = (array)$product;
            array_push($data, $x);
            $total += $product->total ;
        }

        if($customer_id){
            $order = array(
                'user_id' => $customer_id,
                'created_at' => $now,
                'updated_at' => $now,
                'status' => $status,
                'total' => $total
            );
        }else{
            // đặt hàng k cần tài khoản
            // print_r($_POST['checkout']);die();
            $customer = array(
                'name' => $_POST['checkout']['name'],
                'email' => $_POST['checkout']['email'],
                'phone' => $_POST['checkout']['phone'],
                'address' => $_POST['checkout']['address'],
                'matp' => $_POST['checkout']['matp'],
            );
            $customer_md = new Shop_Customer_model();
            $customer_md->saveCustomer($customer);
            $customer_id = $customer_md->insertID();
            $order = array(
                'user_id' => $customer_id,
                'created_at' => $now,
                'updated_at' => $now,
                'status' => $status,
                'total' => $total
            );
            $ses_data = [
                'customer_id' => $customer_id,
                'customer_name' => $customer['name'],
                'customer_email' => $customer['email'],
                'customer_phone' => $customer['phone'],
                'customer_address' => $customer['address'],
                'customer_city' => $customer['matp'],
            ];
            $session->set($ses_data);
        }
        

        $order_md =  new Shop_Order_model();
        $order_md->saveOrder($order);
        $order_id = $order_md->insertID();
        
        // insert order vào database
        // Lấy order detail
        $cart=$session->get('cart');
        foreach($cart as $val){
            $detail = array(
                'order_id' => $order_id,
                'product_id' => $val['id'],
                'qty' => $val['qty'],
            );
            $order_md->saveOrderDetail($detail);
        }
        
        // insert vào database

        $temp = array(
            'product' => $data
        );
        // lấy data order để hiện lên
        // Gui mail

        $toEmail = $session->get('customer_email');
        $row = $session->get('customer_email');
        // print_r($row);
        // die();
        if ($row) {
            try {
                $email = \Config\Services::email();
                $option_md = new Option_model();

                $option = array_column($option_md->getOptions(), null, "name");
                //print_r($option);die();
                // config sendmail
                $config['protocol'] = $option['mail_protocol']['value'];
                $config['SMTPHost'] = $option['mail_SMTPHost']['value'];
                $config['SMTPUser']  = $option['mail_user']['value'];
                $config['SMTPPass'] = $option['mail_password']['value'];
                $config['SMTPPort'] = $option['mail_SMTPPort']['value'];
                $config['SMTPCrypto'] = $option['mail_SMTPCrypto']['value'];
                $config['newline'] = "\r\n";
                //print_r($config);die();
                $email->initialize($config);

                $subject = "Thông tin đơn hàng";
                
                $message = view('frontend/contents/mail_message/mail',$temp);
               
                $email->setTo($toEmail);
                $email->setFrom($option['site_mail']['value'], 'Thông tin đơn hàng của bạn');
                $email->setNewLine("\r\n");
                $email->setMailType('html');
                $email->setSubject($subject);
                $email->setMessage($message);
                
                
                if ($email->send()) 
                {
                    $this->sendToAdmin($order_id);
                    echo view('frontend/contents/shop_cart/thanku', $temp);
                    $session->remove('cart');
                    
                } 
                else 
                {
                    $data = $email->printDebugger(['headers']);
                    print_r($data);
                }
            } catch (Exception $e) {
                $error = $mail->ErrorInfo;
                $session = session();
                $session->setFlashdata('msg', $error);
            }
        } else {
            $session = session();
            $session->setFlashdata('msg', "Địa chỉ email sai");
        }
        
    }

    public function sendToAdmin($order_id){
        $user_md = new User_model();
        $user = $user_md->getUser();
        try {
                $email = \Config\Services::email();
                $option_md = new Option_model();

                $option = array_column($option_md->getOptions(), null, "name");
                //print_r($option);die();
                // config sendmail
                $config['protocol'] = $option['mail_protocol']['value'];
                $config['SMTPHost'] = $option['mail_SMTPHost']['value'];
                $config['SMTPUser']  = $option['mail_user']['value'];
                $config['SMTPPass'] = $option['mail_password']['value'];
                $config['SMTPPort'] = $option['mail_SMTPPort']['value'];
                $config['SMTPCrypto'] = $option['mail_SMTPCrypto']['value'];
                $config['newline'] = "\r\n";
                //print_r($config);die();
                $email->initialize($config);

                $subject = "Website của bạn nhận được 1 đơn hàng mới";
                $now =date('d-m-Y H:i:s');
;
                $message = '<p>Website của bạn nhận được đơn hàng mới với mã đơn hàng '.$order_id.'  vào lúc '.$now.', truy cập quản trị để kiểm tra đơn hàng</p>';

                $toEmail = $user_md->getEmailAdmin();
                $arr = array();
                foreach($toEmail as $val){
                    array_push($arr, $val['email']);
                };

                // print_r($arr); die();
                $email->setTo($arr);
                $email->setFrom($option['site_mail']['value'], 'Thông báo đơn hàng mới');
                $email->setNewLine("\r\n");
                $email->setMailType('html');
                $email->setSubject($subject);
                $email->setMessage($message);
                if ($email->send()) 
                {
                } 
                else 
                {
                    $data = $email->printDebugger(['headers']);
                    print_r($data); die();
                }
            } catch (Exception $e) {
                $error = $mail->ErrorInfo;
                echo $error;die();
        }
    }


    public function addcart()
    {
        $session = session();
        $id=$_POST['id'];
        $item = $_POST; 

        //Lưu vào session
        if($session->get('cart')){
            $cart=$session->get('cart');
            
            if(array_key_exists($id, $cart)){
                $cart[$id] = $item;
            }else{
                $cart[$id] = $item;
            }
        }else{
            $cart[$id]=$item;//chưa có session
        }
        $session->set('cart',$cart);
        //Thống kê số lượng & trả về
        echo json_encode( $cart );
    }

    public function index()
    {
        $now = date('Y-m-d');
        $session = session();
        //Lưu vào session
        if($session->get('cart')){
            $cart=$session->get('cart');
            //print_r($cart); die();
            $shop_product_md = new Shop_Product_model();
            $data = array();
            $total = 0;
            foreach($cart as $cart){
                $product  = $shop_product_md->getShopProductIdInCart($cart['id']);
                $product->product_id = $cart['id'];
                $product->qty = $cart['qty'];
                if($now > $product->from_date && $now < $product->to_date){
                    if($product->ratio != 0){
                        $product->price = $product->price - ($product->price/100)*$product->ratio;
                    }elseif($product->ratio != 0){
                        $product->price = $product->price - $product->money;
                    }
                }
                $product->total = $cart['qty']*$product->price;

                $x = (array)$product;
                array_push($data, $x);
                $total += $product->total ;
            }

            $temp = $this->base;
            $x = array(
                'meta_title' => 'Giỏ hàng',
                'meta_description' => 'Giỏ hàng của bạn'
            );
            $temp['seo'] = (object)$x;
            $data['test'] = array(
                'subview'   => '/frontend/contents/shop_cart/cart',
                'title'     => 'Giỏ hàng',
                'product' => $data,
                'base' => $temp,
            );
            // print_r($data['seo']);die();
            echo view('frontend/layout',$data);
        }else{
            $temp = $this->base;
            $x = array(
                'meta_title' => 'Giỏ hàng',
                'meta_description' => 'Giỏ hàng của bạn'
            );
            $temp['seo'] = (object)$x;
            $data['test'] = array(
                'subview'   => '/frontend/contents/shop_cart/cart_empty',
                'title'     => 'Giỏ hàng',
                
                'base' => $temp,
            );
            // print_r($data['seo']);die();
            echo view('frontend/layout',$data);
        }
        
    }

    public function updateitem()
    {
        $new_cart = $_POST['cart'];
        //print_r($new_cart);die();
        $session = session();
        $session->remove('cart');
        $session->set('cart',$new_cart);
        $url = base_url().'/gio-hang';
        return redirect()->to($url); 
    }

    public function deletecart()
    {
        $session = session();
        $session->remove('cart');
        $url = base_url();
        return redirect()->to($url); 
    }

    public function checkout()
    {
        $session = session();
        $now = date('Y-m-d');
        $city_md = new city_model();
        $cus_md = new Shop_Customer_model();
        if($session->get('customer_isLoggedIn')){
            // echo $session->get('customer_id');die();
            // khách hàng có tài khoản
            $customer=$cus_md->getCustomer($session->get('customer_id'))->getRow();
        }else{
            // khách hàng không có tài khoản
            $customer = '';
        }

        //Lưu vào session
        if($session->get('cart')){
            $cart=$session->get('cart');
            $shop_product_md = new Shop_Product_model();
            $data = array();
            $total = 0;
            foreach($cart as $cart){
                $product  = $shop_product_md->getShopProductIdInCart($cart['id']);

                $product->qty = $cart['qty'];
                if($now > $product->from_date && $now < $product->to_date){
                    if($product->ratio != 0){
                        $product->price = $product->price - ($product->price/100)*$product->ratio;
                    }elseif($product->ratio != 0){
                        $product->price = $product->price - $product->money;
                    }
                }
                $product->total = $cart['qty']*$product->price;

                $x = (array)$product;
                array_push($data, $x);
                $total += $product->total ;
            }

            $temp = $this->base;
            $x = array(
                'meta_title' => 'Giỏ hàng',
                'meta_description' => 'Giỏ hàng của bạn'
            );
            $temp['seo'] = (object)$x;
            $data['test'] = array(
                'title'     => 'Checkout',
                'product' => $data,
                'base' => $temp,
                'customer' => $customer,
                'city' => $city_md->getCity(),
            );
            
            // print_r($data['seo']);die();
            echo view('frontend/contents/shop_cart/checkout',$data);
        }else{
            $temp = $this->base;
            $x = array(
                'meta_title' => 'Giỏ hàng',
                'meta_description' => 'Giỏ hàng của bạn'
            );
            $temp['seo'] = (object)$x;
            $data['test'] = array(
                'subview'   => '/frontend/contents/shop_cart/cart_empty',
                'title'     => 'Giỏ hàng',
                
                'base' => $temp,
            );
            // print_r($data['seo']);die();
            echo view('frontend/layout',$data);
        }
        
    }

    public function removeitem()
    {
        $id = $_GET['id'];
        $session = session();
        $cart = $session->get('cart');
        $new_cart = array();
        foreach($cart as $val){
            if($val['id'] != $id)
            array_push($new_cart, $val);
        }
        $session->set('cart',$new_cart);
        echo json_encode($cart);
    }

    public function countcart()
    {
        $session = session();
        $cart = $session->get('cart');
        $count = count($cart);
        echo json_encode($count );
    }

    public function getcart()
    {
        $now = date('Y-m-d');
        $session = session();
        //Lưu vào session
        if($session->get('cart')){
            $cart=$session->get('cart');
            $shop_product_md = new Shop_Product_model();
            $data = array();
            $total = 0;
            foreach($cart as $cart){
                $product  = $shop_product_md->getShopProductIdInCart($cart['id']);

                $product->cart_id = $cart['id'];
                $product->qty = $cart['qty'];
                if($now > $product->from_date && $now < $product->to_date){
                    if($product->ratio != 0){
                        $product->price = $product->price - ($product->price/100)*$product->ratio;
                    }elseif($product->ratio != 0){
                        $product->price = $product->price - $product->money;
                    }
                }
                $product->total = $cart['qty']*$product->price;

                $x = (array)$product;
                array_push($data, $x);
                $total += $product->total ;
            }
            // print_r($data); die();
            $html = ' <div class="cart-product-container ps-scroll single-cart-item-loop ps">';
        
            if(count($data)){
                foreach($data as $val){
                    //var_dump(strval(price_format($val['qty']))); die();
                    $html=$html.'<div class="single-cart-product"> 
                    <span class="cart-close-icon"> 
                    <a href="javascript:void(0);" onclick="removeItemCart('.$val['cart_id'].')">
                    <i class="ti-close"></i></a> 
                    </span>
                    <div class="image"> 
                    <a href="'.base_url().'/san-pham/'.$val['slug'].'"> 
                        <img src="'.base_url().'/public/uploads/product/'.$val['img'].'" class="img-fluid" alt=""> 
                    </a>
                    </div>
                    <div class="content">
                    <h5><a href="'.base_url().'/san-pham/'.$val['slug'].'">'.$val['name'].'</a></h5>
                    <p>
                        <span class="cart-count">'.strval($val['qty']).' x </span> 
                        <span class="discounted-price">
                            <span class="money" data-currency-usd="'.strval(price_format($val['total'])).' đ" >'.strval(price_format($val['total'])).' đ</span>
                        </span>
                    </p>
                    </div>
                </div>';
                }    
                $html = $html.'</div>';  
                $html = $html.' <!--======= subtotal calculation =======-->
                <p class="cart-subtotal"> 
                <span class="subtotal-title"> Tổng:</span> 
                <span class="subtotal-amount shopping-cart__total">
                    <span class="money" data-currency-usd="'.strval(price_format($total)).' đ" >'.strval(price_format($total)).' đ</span>
                </span>
                </p>
                <!--======= End of subtotal calculation =======-->
                <!--======= cart buttons =======-->
                <div class="cart-buttons">
                <a class="checkout_btn" href="'.base_url().'/gio-hang/checkout">Xử lý đơn hàng</a>
                <a href="'.base_url().'/gio-hang">Xem giỏ hàng</a>
                </div>';
            }else{
                $html = '<p>Giỏ hàng của bạn hiện đang trống</p>';
            }
        }else{
            $html = '<p>Giỏ hàng của bạn hiện đang trống</p>';
        }
        
          
        echo json_encode( $html );
    }
}
