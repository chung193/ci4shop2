<?php namespace App\Controllers\manage;
 
use CodeIgniter\Controller;
use App\Models\manage\Discount_model;
use App\Models\manage\Info_model;

class Discount extends BaseController
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
        $model = new discount_model();
        $data['discount'] = $model->getdiscount();
        $session = session();
        if($session->get('user_role') == 'editor'){
            $subview = '/manage/contents/discount/discount_view_editor';
        }else{
            $subview = '/manage/contents/discount/discount_view';
        }
        $data['data'] = array(
            'site' => $this->site,
            'type' => 'table',
            'subview'   => $subview,
            'title'     => "Khuyến mãi",
            'name'      => $session->get('user_name')
        );
        
        echo view('manage/layout',$data);
    }

    public function add()
    {
        $session = session();
        $model = new discount_model();
        $data['discount'] = $model->getdiscount();
        $data['data'] = array(
            'site' => $this->site,
            'type' => 'form',
            'subview'   => '/manage/contents/discount/add_discount_view',
            'title'     => "Thêm chương trình khuyến mại",
            'name'      => $session->get('user_name')
        );
        echo view('manage/layout',$data);
    }
 
    public function save()
    {
        // print_r($_POST);die();
        $rules = [
            'title'      => ['label' => 'Tiêu đề','rules' =>'required|max_length[600]'],
            'description'   => ['label' => 'Nội dung', 'rules' =>'required'],
            'img' => [
                'label' => 'Image File',
                'rules' => 'is_image[img]'
                    . '|mime_in[img,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[img,102400]'
                    . '|max_dims[img,204800, 204800]',
            ],
        ];
         
        if($this->validate($rules)){
            $model = new discount_model();
            
            if($this->request->getFile('img') !== ""){
                $img = $this->request->getFile('img');
                $basename = '';
                if ($img->isValid() && !$img->hasMoved()) {
                    $img->move(ROOTPATH.'/public/uploads/discount/');
                    $basename = $img->getName();
                }
            }else{
                $basename = '';
            }

            $date = $this->request->getPost('date');
            $arr = explode('-', $date);
            // print_r($arr);
            // die();

            if($this->request->getPost('slug') == ""){
                $slug = create_slug($this->request->getPost('title'));
            }else{
                $slug = create_slug($this->request->getPost('slug'));
            }
            $count = $model->countWhere($slug);
            if($count){
                $slug=$slug.'-'.$count;
            }

            $data = array(
                'title'     => $this->request->getPost('title'),
                'description' => $this->request->getPost('description'),
                'slug' => $slug,
                'banner' => $basename,
                'ratio' => $this->request->getPost('ratio'),
                'money' => $this->request->getPost('money'),
                'from_date'=> date("Y-m-d", strtotime($arr[0])),
                'to_date' => date("Y-m-d", strtotime($arr[1]))
            );
            $model->savediscount($data);

            return redirect()->to('/manage/discount');
        }else{
            $session = session();
            $session->setFlashdata('msg', $this->validator->listErrors());
            return redirect()->to('/manage/discount/add/');
        }
    }

    public function edit($id=false)
    {
        $model = new discount_model();
        $data['discount_list'] = $model->getdiscount();
        $data['discount'] = $model->getdiscount($id)->getRow();
        $session = session();
        $data['data'] = array(
            'site' => $this->site,
            'type' => 'form',
            'subview'   => '/manage/contents/discount/edit_discount_view',
            'title'     => "Sửa thông tin khuyến mại",
            'name'      => $session->get('user_name')
        );
        echo view('manage/layout',$data);
    }
 
    public function update()
    {
        // print_r($_POST);die();
        $rules = [
            'title'      => ['label' => 'Tiêu đề','rules' =>'required|max_length[600]'],
            'description'   => ['label' => 'Nội dung', 'rules' =>'required'],
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
            $model = new discount_model();
            
            if($this->request->getFile('img') !== ""){
                $img = $this->request->getFile('img');
                $basename = $this->request->getPost('old_banner');
                if ($img->isValid() && !$img->hasMoved()) {
                    $img->move(ROOTPATH.'/public/uploads/discount/');
                    $basename = $img->getName();
                }
            }else{
                $basename = $this->request->getPost('old_banner');
            }

            $date = $this->request->getPost('date');
            $arr = explode('-', $date);
            // print_r($arr);
            // die();

            if($this->request->getPost('slug') == ""){
                $slug = create_slug($this->request->getPost('title'));
            }else{
                $slug = create_slug($this->request->getPost('slug'));
            }

            $data = array(
                'title'     => $this->request->getPost('title'),
                'description' => $this->request->getPost('description'),
                'slug' => $slug,
                'banner' => $basename,
                'ratio' => $this->request->getPost('ratio'),
                'money' => $this->request->getPost('money'),
                'from_date'=> date("Y-m-d", strtotime($arr[0])),
                'to_date' => date("Y-m-d", strtotime($arr[1]))
            );
            $model->updatediscount($data, $id);

            return redirect()->to('/manage/discount');
        }else{
            $session = session();
            $session->setFlashdata('msg', $this->validator->listErrors());
            return redirect()->to('/manage/discount/edit/'.$id);
        }
    }

    public function delete($id)
    {
        $model = new discount_model();
        $model->deletediscount($id);
        return redirect()->to('/manage/discount');
    }

}