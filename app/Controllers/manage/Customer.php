<?php namespace App\Controllers\manage;
 
use CodeIgniter\Controller;
use App\Models\manage\Shop_Customer_model;
use App\Models\manage\Tinhthanhpho_model;
use App\Models\manage\Info_model;

class Customer extends BaseController
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
        $model = new Shop_Customer_model();
        $data['customer'] = $model->getcustomer();
        $session = session();
        if($session->get('user_role') == 'editor'){
            $subview = '/manage/contents/customer/customer_view_editor';
        }else{
            $subview = '/manage/contents/customer/customer_view';
        }
        $data['data'] = array(
            'site' => $this->site,
            'type' => 'table',
            'subview'   => $subview,
            'title'     => "Khách hàng",
            'name'      => $session->get('user_name')
        );
        
        echo view('manage/layout',$data);
    }

    public function add()
    {
        $session = session();
        $model = new Shop_Customer_model();
        $data['customer'] = $model->getcustomer();
        $data['data'] = array(
            'site' => $this->site,
            'type' => 'form',
            'subview'   => '/manage/contents/customer/add_customer_view',
            'title'     => "Thêm customer",
            'name'      => $session->get('user_name')
        );
        echo view('manage/layout',$data);
    }
 
    public function save()
    {
        $rules = [
            'text_main'      => 'required|max_length[600]',
            'text_sub'      => 'required|max_length[600]',
            'url'  => 'min_length[3]|max_length[2000]',
            'location'  => 'min_length[3]|max_length[2000]',
            'img' => [
                'label' => 'Image File',
                'rules' => 'is_image[img]'
                    . '|mime_in[img,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[img,102400]'
                    . '|max_dims[img,204800, 204800]',
            ],
        ];
         
        if($this->validate($rules)){
            $model = new Shop_Customer_model();
            
            if($this->request->getFile('img') !== ""){
                $img = $this->request->getFile('img');
                $basename = '';
                if ($img->isValid() && !$img->hasMoved()) {
                    $img->move(ROOTPATH.'/public/uploads/customer/');
                    $basename = $img->getName();
                }
            }else{
                $basename = '';
            }

            $data = array(
                'text_main'     => $this->request->getPost('text_main'),
                'text_sub' => $this->request->getPost('text_sub'),
                'url' => $this->request->getPost('url'),
                'img' => $basename,
                'location' => $this->request->getPost('location'),
            );
            $model->savecustomer($data);

            return redirect()->to('/manage/customer');
        }else{
            $session = session();
            $session->setFlashdata('msg', $this->validator->listErrors());
            return redirect()->to('/manage/customer/add/');
        }
    }

    public function edit($id=false)
    {
        $model = new Shop_Customer_model();
        $ttp = new Tinhthanhpho_model();
        $data['customer_list'] = $model->getcustomer();
        $data['customer'] = $model->getcustomer($id)->getRow();

        $session = session();
        $data['data'] = array(
            'site' => $this->site,
            'type' => 'form',
            'subview'   => '/manage/contents/customer/edit_customer_view',
            'title'     => "Sửa customer",
            'ttp' => $ttp->gettinhthanhpho(),
            'name'      => $session->get('user_name')
        );
        echo view('manage/layout',$data);
    }
 
    public function update()
    {
        $rules = [
            'name'      => 'required|max_length[600]',
            'phone'      => 'required|max_length[600]',
            'email'  => 'min_length[3]|max_length[2000]',
            'address'  => 'min_length[3]|max_length[2000]',
        ];
        $id = $this->request->getPost('id');
        if($this->validate($rules)){
            $model = new Shop_Customer_model();
            
            $data = array(
                'name'     => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'username' => $this->request->getPost('username'),
                'phone' => $this->request->getPost('phone'),
                'address' => $this->request->getPost('address'),
                'matp' => $this->request->getPost('matp'),
                'dob' => $this->request->getPost('dob'),
            );
            $model->updatecustomer($data, $id);
            return redirect()->to('/manage/customer');
        }else{
            $session = session();
            $session->setFlashdata('msg', $this->validator->listErrors());
            return redirect()->to('/manage/customer/edit/'. $id);
        }
    }

    public function delete($id)
    {
        $model = new Shop_Customer_model();
        $model->deletecustomer($id);
        return redirect()->to('/manage/customer');
    }

}