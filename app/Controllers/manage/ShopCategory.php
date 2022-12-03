<?php namespace App\Controllers\manage;
 
use CodeIgniter\Controller;
use App\Models\manage\Shop_Category_model;
use App\Models\manage\Seo_model;
use App\Models\manage\Info_model;

class ShopCategory extends BaseController
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
        $model = new Shop_Category_model();
        $data['shopcategory'] = $model->getshopcategory();
        $session = session();
        if($session->get('user_role') == 'editor'){
            $subview = '/manage/contents/shopcategory/shopcategory_view_editor';
        }else{
            $subview = '/manage/contents/shopcategory/shopcategory_view';
        }
        $data['data'] = array(
            'site' => $this->site,
            'type' => 'table',
            'subview'   => $subview,
            'title'     => "Danh mục sản phẩm",
            'name'      => $session->get('user_name')
        );
        
        echo view('manage/layout',$data);
    }

    public function add()
    {
        $session = session();
        $model = new Shop_Category_model();
        $data['shopcategory'] = $model->getshopcategory();
        $data['data'] = array(
            'site' => $this->site,
            'type' => 'form',
            'subview'   => '/manage/contents/shopcategory/add_shopcategory_view',
            'title'     => "Thêm mới danh mục sản phẩm",
            'name'      => $session->get('user_name')
        );
        echo view('manage/layout',$data);
    }
 
    public function save()
    {
        $rules = [
            'name'      => ['label' => 'Tên danh mục','rules' =>'required|max_length[600]'],
            'description'       => ['label' => 'Mô tả','rules' =>'required'],
            'parent_id'       => ['label' => 'Danh mục cha','rules' =>'required'],
        ];
         
        

        if($this->validate($rules)){
            $model = new Shop_Category_model();
            if($this->request->getPost('slug') == ""){
                $slug = create_slug($this->request->getPost('name'));
            }else{
                $slug = create_slug($this->request->getPost('slug'));
            }
            
            $count = $model->countWhere($slug);
            if($count){
                $slug=$slug.'-'.$count;
            }
            // check default shopcategory
            if($this->request->getPost('is_default')){
                $model->defaultcat();
                $default=1;
            }else{
                $default=0;
            }

            $data = array(
                'name'     => $this->request->getPost('name'),
                'slug' => $slug,
                'is_default' => $default,
                'description' => $this->request->getPost('description'),
                'parent_id' => $this->request->getPost('parent_id'),
            );
            
            $model->saveshopcategory($data);
            // thêm mới data seo
            $id_inserted = $model->insertID();
            $seo = array(
                'meta_title' => $this->request->getPost('meta_title'),
                'meta_description' => $this->request->getPost('meta_description'),
                'content_type' => 'shopcategory',
                'content_id' => $id_inserted
            );
            $this->setSeoContent($seo);
            return redirect()->to('/manage/shop-category');
        }else{
            $session = session();
            $session->setFlashdata('msg', $this->validator->listErrors());
            return redirect()->to('/manage/shop-category/add/');
        }
    }

    public function edit($id=false)
    {
        $model = new Shop_Category_model();
        $data['shopcategory_list'] = $model->getShopCategory();
        // print_r($data['shopcategory_list']); die();
        $data['shopcategory'] = $model->getShopCategory($id)->getRow();
        $seo = $this->getSeoContent($id, 'shopcategory')->getRow();
        $session = session();
        $data['data'] = array(
            'site' => $this->site,
            'type' => 'form',
            'subview'   => '/manage/contents/shopcategory/edit_shopcategory_view',
            'title'     => "Chỉnh sửa thông tin danh mục sản phẩm",
            'seo' => $seo,
            'name'      => $session->get('user_name')
        );
        echo view('manage/layout',$data);
    }
 
    public function update()
    {
        
        $rules = [
            'name'      => ['label' => 'Tên danh mục','rules' =>'required|max_length[600]'],
            'description'       => ['label' => 'Mô tả','rules' =>'required'],
            'parent_id'       => ['label' => 'Danh mục cha','rules' =>'required'],
        ];

        $id = $this->request->getPost('id');
         
        if($this->validate($rules)){
            $model = new Shop_Category_model();
            
            // check default shopcategory
            if($this->request->getPost('is_default')){
                $model->defaultcat();
                $default = 1;
            }else{
                $default = 0;
            }

            if($this->request->getPost('slug') == ""){
                $slug = create_slug($this->request->getPost('name'));
            }else{
                $slug = create_slug($this->request->getPost('slug'));
            }
            
            $count = $model->countWhere($slug);
            if($count){
                $slug=$slug.'-'.$count;
            }

            $data = array(
                'name'  => $this->request->getPost('name'),
                'slug' => $slug,
                'description' => $this->request->getPost('description'),
                'is_default' => $default,
                'parent_id' => $this->request->getPost('parent_id'),
            );
            $model->updateshopcategory($data, $id);

            $seo_model = new Seo_model();
             $seo_item = $seo_model->getseo($id, 'shopcategory')->getRow();
             $seo = array(
                 'meta_title' => $this->request->getPost('meta_title'),
                 'meta_description' => $this->request->getPost('meta_description'),
                 'content_type' => 'shopcategory',
                 'content_id' => $id
             );
             // print_r($seo);die();
             $this->updateSeoContent($seo, $seo_item->id);

            return redirect()->to('/manage/shop-category');
        }else{
            $session = session();
            $session->setFlashdata('msg', $this->validator->listErrors());
            return redirect()->to('/manage/shop-category/edit/'.$id);
        }
    }

    public function delete($id)
    {
        $model = new Shop_Category_model();
        // echo $id;
        // die();
        $model->deleteshopcategory($id);
        return redirect()->to('/manage/shop-category');
    }

}