<?php namespace App\Controllers\manage;
 
use CodeIgniter\Controller;
use App\Models\manage\Shop_Producer_model;
use App\Models\manage\Info_model;

class ShopProducer extends BaseController
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
        $model = new Shop_Producer_model();
        $data['producer'] = $model->getproducer();
        $session = session();
        if($session->get('user_role') == 'editor'){
            $subview = '/manage/contents/shopproducer/producer_view_editor';
        }else{
            $subview = '/manage/contents/shopproducer/producer_view';
        }
        $data['data'] = array(
            'site' => $this->site,
            'type' => 'table',
            'subview'   => $subview,
            'title'     => "Nhà cung cấp",
            'name'      => $session->get('user_name')
        );
        
        echo view('manage/layout',$data);
    }

    public function add()
    {
        $session = session();
        $model = new Shop_Producer_model();
        $data['producer'] = $model->getproducer();
        $data['data'] = array(
            'site' => $this->site,
            'type' => 'form',
            'subview'   => '/manage/contents/shopproducer/add_producer_view',
            'title'     => "Thêm mới nhà cung cấp",
            'name'      => $session->get('user_name')
        );
        echo view('manage/layout',$data);
    }
 
    public function save()
    {
        $rules = [
            'name'      => ['label' =>'Tên','rules' =>'required|max_length[600]'],
            'url'  => ['label' =>'URL', 'rules' =>'min_length[3]|max_length[2000]'],
            'img' => [
                'label' => 'Image File',
                'rules' => 'is_image[img]'
                    . '|mime_in[img,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[img,102400]'
                    . '|max_dims[img,204800, 204800]',
            ],
        ];
         
        if($this->validate($rules)){
            $model = new Shop_Producer_model();

            if($this->request->getFile('img') !== ""){
                $img = $this->request->getFile('img');
                $basename = '';
                if ($img->isValid() && !$img->hasMoved()) {
                    $img->move(ROOTPATH.'/public/uploads/producer/');
                    $basename = $img->getName();
                }
            }else{
                $basename = '';
            }

            $data = array(
                'name'     => $this->request->getPost('name'),
                'url' => $this->request->getPost('url'),
                'img' => $basename
            );

            $model->saveproducer($data);

            
            return redirect()->to('/manage/shop-producer');
        }else{
            $session = session();
            $session->setFlashdata('msg', $this->validator->listErrors());
            return redirect()->to('/manage/shop-producer/add/');
        }
    }

    public function edit($id=false)
    {
        $model = new Shop_Producer_model();
        $data['shopproducer'] = $model->getproducer($id)->getRow();
        $session = session();
        $data['data'] = array(
            'site' => $this->site,
            'type' => 'form',
            'subview'   => '/manage/contents/shopproducer/edit_producer_view',
            'title'     => "Chỉnh sửa thông tin nhà cung cấp",
            'name'      => $session->get('user_name')
        );
        echo view('manage/layout',$data);
    }
 
    public function update()
    {
        $rules = [
            'name'      => ['label' =>'Tên','rules' =>'required|max_length[600]'],
            'url'  => ['label' =>'URL', 'rules' =>'min_length[3]|max_length[2000]'],
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
            
            if($this->request->getFile('img') !== ""){
                $img = $this->request->getFile('img');
                $basename = '';
                if ($img->isValid() && !$img->hasMoved()) {
                    $img->move(ROOTPATH.'/public/uploads/producer/');
                    $basename = $img->getName();
                }
                if ($img == ''){
                    $basename = $this->request->getPost('producer_img');
                }
            }else{
                $basename = $this->request->getPost('producer_img');
            }

            $model = new Shop_Producer_model();

            $data = array(
                'name'  => $this->request->getPost('name'),
                'url' => $this->request->getPost('url'),
                'img'=> $basename
            );
            
            $model->updateproducer($data, $id);
            return redirect()->to('/manage/shop-producer');
        }else{
            $session = session();
            $session->setFlashdata('msg', $this->validator->listErrors());
            return redirect()->to('/manage/shop-producer/edit/'.$id);
        }
    }

    public function delete($id)
    {
        $model = new Shop_Producer_model();
        $model->deleteproducer($id);
        return redirect()->to('/manage/shop-producer');
    }

}