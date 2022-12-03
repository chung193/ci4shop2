<?php namespace App\Controllers\manage;
 
use CodeIgniter\Controller;
use App\Models\manage\Shop_Ui_model;
use App\Models\manage\Info_model;

class ShopUi extends BaseController
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
        $model = new Shop_Ui_model();
        $data['shopui'] = $model->getUi();
        $session = session();
        $data['data'] = array(
            'subview'   => '/manage/contents/shopui/edit_shopui_view',
            'title'     => "Shop Ui",
            'site' => $this->site,
            'type' => 'table',
            'name'      => $session->get('user_name')
        );
        // print_r($data['shopui']->text_top_header);die();
        echo view('manage/layout',$data);
    }

 
    public function update()
    {
        
        $rules = [
            'text_top_header' => ['label'=>'Text trên cùng','rules'=> 'required|min_length[3]|max_length[600]'],
        ];

        $id = $this->request->getPost('id');

        if($this->validate($rules)){

            $model = new Shop_Ui_model();

            $data = array(
                'text_top_header'  => $this->request->getPost('text_top_header'),
            );

            $model->updateUi($data, $id);
            return redirect()->to('/manage/shop-ui');
        }else{
            $session = session();
            $session->setFlashdata('msg', $this->validator->listErrors());
            return redirect()->to('/manage/shop-ui');
        }
    }

}