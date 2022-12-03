<?php namespace App\Controllers\manage;
 
use CodeIgniter\Controller;
use App\Models\manage\Shop_Product_model;
use App\Models\manage\Shop_Category_model;
use App\Models\manage\Shop_Producer_model;
use App\Models\manage\Seo_model;
use App\Models\manage\Post_model;
use App\Models\manage\Category_model;

class Crawl extends BaseController
{
    public function index()
    {
        helper('simple_html_dom_helper');
        $session = session();
        $subview = 'manage/contents/crawl/crawl';
        if($this->request->getPost('url')){
            
            $html = file_get_html($this->request->getPost('url'));
            //echo $html; die();
            $name = $html->find('.name-product',0)->plaintext;
            $name = htmlspecialchars($name);


            $price = $html->find('.price',0)->plaintext;
            
            $price = substr($price,0,-2);
            $price = str_replace(".","", $price);
            //echo $price;die();
            $arr = $html->find('.thongsokythuat .content table tbody tr td');
            
            $i = 1;
            $string = '';
            
            foreach($arr as $val){
                $val = str_replace(",","",strip_tags($val));
                if($i%2 == 0){
                    $string =  $string.$val.',';
                }else{
                    $string = $string.$val.':';
                }
                $i++;
            }

            $detail = $string;
            // echo $detail;
            // die();

            $description  = $html->find('#content-desc', 0); // lấy nội dung chi tiết
            //die();
            // echo gettype($description);
            // die();
            $src = array();
            foreach($description->find('img') as $val){
                array_push($src, $val->src);
            }

            foreach($src as $val){
                if(substr($val, 0, 5) != 'https'){
                    $description = str_replace($val, 'https://laptop88.vn'.$val, $description );
                }
            }

            // echo gettype($description);
            // die();
            // chi tiết sản phẩm
            // echo $description; 
            
            // get img 
            $link = array();
            $img = $html->find('.product-img-sp a'); // lấy hết thẻ a
            $image_result = array(); // list ảnh
            $folder = base_url().'/public/uploads/product/'; // thư mục chứa ảnh
            
            foreach($img as $val){
                array_push($link, 'https://laptop88.vn'.$val->href); // lấy link ảnh vào mảng
                $image = explode('/','https://laptop88.vn'.$val->href);
                array_push($image_result, end($image)) ; // tên ảnh
                //echo '<img src="https://laptop88.vn'.$val->href.'">';
            }

            $image_result  = array_unique($image_result);
            
            foreach($link as $val){
                $image = explode('/','https://laptop88.vn'.$val);
                file_put_contents('./public/uploads/product/'.end($image), file_get_contents($val));
            }
            
            $now = date('Y-m-d H:i:s');
            // echo gettype($name);
            // echo gettype($price);
            // echo create_slug($name);
            // die();
            $slug = create_slug($name);
            //echo $slug; die();
            $model = new Shop_Product_model();
            $count = $model->countWhere($slug);
            // echo $count; die();
            if($count){
                $slug=$slug.'-'.$count;
            }

            

            

            $product = array(
                'name'=> strval($name),
                'slug'=> $slug,
                'price'=> $price,
                'detail'=>$detail,
                'category_id'=>$this->request->getPost('category_id'),
                'producer_id'=>$this->request->getPost('producer_id'),
                'description' => $description,
                'img'=> $image_result[0],
                'img_list' => implode(",",array_slice($image_result, 1, count($image_result)-1)),
                'qty' => 1000,
                'id_discount' => 1,
                'show_price' => 0,
                // // 'parent_id' => $this->request->getPost('parent_id'),
                'parent_id' => 0,
                'create_id' => $session->get('user_id'),
                'update_id' => $session->get('user_id'),
                'created_at' => $now,
                'updated_at' => $now,
                'published' => 1
            );

            // print_r($product);
            // die();

            
            $model->saveshopproduct($product);

            // thêm mới data seo
            $id_inserted = $model->insertID();
            $seo = array(
                'meta_title' => $name,
                'meta_description' => $name,
                'content_type' => 'product',
                'content_id' => $id_inserted
            );
            $this->setSeoContent($seo);

            $data = array(

                'url'=>$this->request->getPost('url')
            );
            $cat = new Shop_Category_model();
            $pro = new Shop_Producer_model();
            
            $data['shop_category'] = $cat->getShopCategory();
            $data['shop_producer'] = $pro->getproducer();
            $data['data'] = array(
                'subview'   => $subview,
                'title'     => "Crawl",
                'name'      => $session->get('user_name')
            );
        }else{
            $data = array(
                'url'=>''
            );
            $cat = new Shop_Category_model();
            $pro = new Shop_Producer_model();
            
            $data['shop_category'] = $cat->getShopCategory();
            $data['shop_producer'] = $pro->getproducer();
            $data['data'] = array(
                'subview'   => $subview,
                'title'     => "Crawl",
                'name'      => $session->get('user_name')
            );
        }
        echo view('manage/layout',$data);
    }

    public function post()
    {
        helper('simple_html_dom_helper');
        $session = session();
        $subview = 'manage/contents/crawl/crawlpost';
        if($this->request->getPost('url')){
            
            $html = file_get_html($this->request->getPost('url'));
            // echo $html; die();
            $name = $html->find('.thread-title',0)->plaintext;
            $name = htmlspecialchars($name);
            $slug = create_slug($name);
            // echo $slug; die();
            // echo $html;die(); class="content-inner "
            $content  = $html->find('.content', 0); 
            // echo $content; die();

            // lấy hết src của ảnh
            $src = "";
			$img = "";
            foreach($content->find('img') as $val){
                $src = $val->src;
                // echo $src; die();
                $image = explode('/',$src);
                $img = end($image);
                file_put_contents('./public/uploads/post/'.$img, file_get_contents($src));
                break;
            }

            //echo $img;die();
            
            $now = date('Y-m-d H:i:s');
            // echo gettype($name);
            // echo gettype($price);
            // echo create_slug($name);
            // die();
            //echo $slug; die();
            $model = new Post_model();
            $count = $model->countWhere($slug);
            // echo $count; die();
            if($count){
                $slug=$slug.'-'.$count;
            }
            $session = session();
            $data = array(
                'title'  => $name,
                'parentid' => $this->request->getPost('parentid'),
                'authorid' => $session->get('user_id'),
                'slug' => $slug,
                'content' => $content,
                'trash' => 0,
                'img' => $img,
                'published' => $this->request->getPost('published'),
                'publishat' => $this->request->getPost('published')?$now:0,
                'createdat' => $now,
                'updateat' => $now,
            );


            // print_r($data);
            // die();

            
            $model->savePost($data);

            // thêm mới data seo
            $id_inserted = $model->insertID();
            $seo = array(
                'meta_title' => $name,
                'meta_description' => $name,
                'content_type' => 'post',
                'content_id' => $id_inserted
            );
            $this->setSeoContent($seo);

            $data = array(
                'url'=>$this->request->getPost('url')
            );
            $cat = new Category_model();
            
            $data['category'] = $cat->getCategory();
            $data['data'] = array(
                'subview'   => $subview,
                'title'     => "Crawl",
                'name'      => $session->get('user_name')
            );
        }else{
            $data = array(
                'url'=>''
            );
            $cat = new Category_model();
            
            $data['category'] = $cat->getCategory();
            $data['data'] = array(
                'subview'   => $subview,
                'title'     => "Crawl",
                'name'      => $session->get('user_name')
            );
        }
        echo view('manage/layout',$data);
    }
}