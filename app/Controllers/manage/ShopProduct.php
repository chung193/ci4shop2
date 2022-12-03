<?php namespace App\Controllers\manage;
 
use CodeIgniter\Controller;
use App\Models\manage\Shop_Product_model;
use App\Models\manage\Shop_Category_model;
use App\Models\manage\Shop_Producer_model;
use App\Models\manage\Seo_model;
use App\Models\manage\Discount_model;
use App\Models\manage\Info_model;

class ShopProduct extends BaseController
{
    public $site;
    function __construct()
    {

        $info_md = new Info_model();
        $this->site = array(
            'info' => $info_md->getInfo()
        );
    }


    public function index()
    {
        $model = new Shop_Product_model();
        $data['shopproduct'] = $model->getshopproduct();
        $session = session();
        $data['data'] = array(
            'site' => $this->site,
            'type' => 'table',
            'subview'   => '/manage/contents/shopproduct/shop_product_view',
            'title'     => "Sản phẩm",
            'name'      => $session->get('user_name')
        );
        echo view('manage/layout',$data);
    }

    public function add()
    {
        $session = session();
        $discount = new Discount_model();
        $cat = new Shop_Category_model();
        $pro = new Shop_Producer_model();
        $data['discount'] = $discount->getdiscount();
        $data['shop_category'] = $cat->getShopCategory();
        $data['shop_producer'] = $pro->getproducer();
        $data['data'] = array(
            'site' => $this->site,
            'type' => 'form',
            'subview'   => '/manage/contents/shopproduct/add_shop_product_view',
            'title'     => "Thêm mới sản phẩm",
            'name'      => $session->get('user_name')
        );
        echo view('manage/layout',$data);
    }
 
    public function save()
    {
        $rules = [
            'name'      => ['label'=>'Tên sản phẩm','rules'=>'required|min_length[3]|max_length[600]'],
            'category_id'   => ['label'=>'Tên danh mục','rules'=>'required|numeric'],
            'producer_id'   => ['label'=>'Tên nhà cung cấp','rules'=>'required|numeric'],
            'description'=> ['label'=>'Mô tả','rules'=>'required|min_length[6]'],
            'slug'       => ['label'=>'Slug','rules'=>'max_length[255]'],
            'img' => [
                'label' => 'Image File',
                'rules' => 'is_image[img]'
                    . '|mime_in[img,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[img,102400]'
                    . '|max_dims[img,204800, 204800]',
            ],
        ];
         
        if($this->validate($rules)){

            if($this->request->getPost('published')){
                $published = $this->request->getPost('published');
            }else{
                $published = 0;
            }
            
            
            if($this->request->getFile('img') != ""){
                $img = $this->request->getFile('img');
                $basename = '';
                if ($img->isValid() && !$img->hasMoved()) {
                    $img->move(ROOTPATH.'/public/uploads/product/');
                    $basename = $img->getName();
                }
            }else{
                $basename = '';
            }

            // echo !empty($this->request->getFileMultiple('img_list'));
            // die();
            $temp = '';
            if (empty($this->request->getFileMultiple('img_list'))) {
                
                foreach($this->request->getFileMultiple('img_list') as $file)
                {   
    
                    $file->move(ROOTPATH.'/public/uploads/product/');
    
                    $temp = $temp.$file->getClientName().',';
                }
            }

            $model = new Shop_Product_model();
            $now = date('Y-m-d H:i:s');
            $session = session();

            if($this->request->getPost('slug') == ""){
                $slug = create_slug($this->request->getPost('name'));
            }else{
                $slug = create_slug($this->request->getPost('slug'));
            }

            $count = $model->countWhere($slug);
            // echo $count;die();
            if($count){
                $slug=$slug.'-'.$count;
            }

            //echo $slug;die();

            $data = array(
                'name'  => $this->request->getPost('name'),
                'summary' => $this->request->getPost('summary'),
                'category_id' => $this->request->getPost('category_id'),
                'producer_id' => $this->request->getPost('producer_id'),
                'description' => $this->request->getPost('description'),
                'price' => $this->request->getPost('price'),
                'slug' => $slug,
                'img' => $basename,
                'img_list' => $temp, 
                'published' => $published ,
                'created_at' => $now,
                'updated_at' => $now,
            );
            $model->saveshopproduct($data);

            // thêm mới data seo
            $id_inserted = $model->insertID();
            $seo = array(
                'meta_title' => $this->request->getPost('meta_title'),
                'meta_description' => $this->request->getPost('meta_description'),
                'content_type' => 'product',
                'content_id' => $id_inserted
            );
            $this->setSeoContent($seo);
            return redirect()->to('/manage/shop-product');
        }else{
            $session = session();
            $session->setFlashdata('msg', $this->validator->listErrors());
            return redirect()->to('/manage/shop-product/add/');
        }
    }

    public function edit($id)
    {
        
            $model = new Shop_Product_model();
            $catmodel = new Shop_Category_model();
            $pro = new Shop_Producer_model();
            $discount = new Discount_model();
            $data['shop_category'] = $catmodel->getShopCategory();
            $data['shop_producer'] = $pro->getproducer();
            $data['shopproduct'] = $model->getshopproduct($id)->getRow();
            $data['discount'] = $discount->getdiscount();
            //print_r($data['discount']);die();
            $seo = $this->getSeoContent($id, 'product')->getRow();
            $session = session();
            $data['data'] = array(
                'site' => $this->site,
                'type' => 'form',
                'subview'   => '/manage/contents/shopproduct/edit_shop_product_view',
                'title'     => "Chỉnh sửa thông tin sản phẩm",
                'seo' => $seo,
                'name'      => $session->get('user_name')
            );
            echo view('manage/layout',$data);
    }
 
    public function update()
    {
        $rules = [
            'name'      => ['label'=>'Tên sản phẩm','rules'=>'required|min_length[3]|max_length[600]'],
            'category_id'   => ['label'=>'Tên danh mục','rules'=>'required|numeric'],
            'producer_id'   => ['label'=>'Tên nhà cung cấp','rules'=>'required|numeric'],
            'description'=> ['label'=>'Mô tả','rules'=>'required|min_length[6]'],
            'slug'       => ['label'=>'Slug','rules'=>'max_length[255]'],
            'img' => [
                'label' => 'Image File',
                'rules' => 'is_image[img]'
                    . '|mime_in[img,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[img,102400]'
                    . '|max_dims[img,204800, 204800]',
            ],
        ];
        $id = $this->request->getPost('id');
        if($this->validate($rules)){
            $model = new Shop_Product_model();
            
            if($this->request->getPost('published')){
                $published = $this->request->getPost('published');
            }else{
                $published = 0;
            }

            // ảnh đại diện
            if($this->request->getFile('image') !== ""){
                $img = $this->request->getFile('image');
                $basename = '';
                if($img != null){
                    if ($img->isValid() && !$img->hasMoved()) {
                        $img->move(ROOTPATH.'/public/uploads/product/');
                        $basename = $img->getName();
                    }
                }
                
                if ($img == ''){
                    $basename = $this->request->getPost('product_img');
                }
            }else{
                $basename = $this->request->getPost('product_img');
            }


            // Nhiều ảnh
            if ($this->request->getFileMultiple('img_list')) {
                $temp = '';
                
                foreach($this->request->getFileMultiple('img_list') as $file)
                {   
                    if($file->isValid()){
                        $file->move(ROOTPATH.'/public/uploads/product/');
                        $temp = $temp.$file->getClientName().',';
                    }
                }
           }

           if($temp == ''){
                $temp = $this->request->getPost('product_img_list');
           }
            
            if($this->request->getPost('slug') == ""){
                $slug = create_slug($this->request->getPost('name'));
            }else{
                $slug = create_slug($this->request->getPost('slug'));
            }

            $now = date('Y-m-d H:i:s');
            $data = array(
                'name'  => $this->request->getPost('name'),
                'summary' => $this->request->getPost('summary'),
                'category_id' => $this->request->getPost('category_id'),
                'producer_id' => $this->request->getPost('producer_id'),
                'description' => $this->request->getPost('description'),
                'price' => $this->request->getPost('price'),
                'show_price' => $this->request->getPost('show_price'),
                'id_discount' => $this->request->getPost('id_discount'),
                'slug' => $slug,
                'img' => $basename,
                'img_list' => $temp, 
                'published' => $published ,
                'created_at' => $now,
                'updated_at' => $now,
            );

            // print_r($data); die();

            $model->updateshopproduct($data, $id);

             // cập nhật data seo
             $seo_model = new Seo_model();
             $seo_item = $seo_model->getseo($id, 'product')->getRow();
             $seo = array(
                 'meta_title' => $this->request->getPost('meta_title'),
                 'meta_description' => $this->request->getPost('meta_description'),
                 'content_type' => 'product',
                 'content_id' => $id
             );
             // print_r($seo);die();
             $this->updateSeoContent($seo, $seo_item->id);
            return redirect()->to('/manage/shop-product');
        }else{
            $session = session();
            $session->setFlashdata('msg', $this->validator->listErrors());
            return redirect()->to('/manage/shop-product/edit/'.$id);
        }
    }

    public function delete($id)
    {
        // $model = new Shop_Product_model();
        // $model->moveTrash($id);
        // return redirect()->to('/manage/shopproduct');
        $this->delete_from_trash($id);
        return redirect()->to('/manage/shop-product');
    }

    public function restore($id)
    {
        $model = new Shop_Product_model();
        $model->Restore($id);
        return redirect()->to('/manage/shopproduct');
    }

    public function delete_from_trash($id)
    {
        $model = new Shop_Product_model();
        $model->deleteshopproduct($id);
        return redirect()->to('/manage/shop-product');
    }

}