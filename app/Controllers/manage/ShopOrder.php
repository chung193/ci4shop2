<?php namespace App\Controllers\manage;
 
use CodeIgniter\Controller;
use App\Models\manage\Shop_Category_model;
use App\Models\manage\Seo_model;
use App\Models\manage\Shop_Order_model;
use App\Models\manage\Info_model;

class ShopOrder extends BaseController
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
        $model = new Shop_Order_model();
        $data['shoporder'] = $model->getShoporder();
        $session = session();
        if($session->get('user_role') == 'editor'){
            $subview = '/manage/contents/shoporder/shoporder_view_editor';
        }else{
            $subview = '/manage/contents/shoporder/shoporder_view';
        }
        $data['data'] = array(
            'site' => $this->site,
            'type' => 'table',
            'subview'   => $subview,
            'title'     => "Đơn hàng",
            'name'      => $session->get('user_name')
        );
        
        echo view('manage/layout',$data);
    }

    
    public function detail($id=false)
    {
        $model = new Shop_Order_model();
        $order = $model->getShoporder($id);
        $detail = $model->getShopOrderDetail($id);
        $session = session();
        $data['data'] = array(
            'site' => $this->site,
            'type' => 'table',
            'subview'   => '/manage/contents/shoporder/detail_shoporder_view',
            'title'     => "Chi tiết đơn hàng",
            'name' => $session->get('user_name'),
            'order' => $order,
            'detail' => $detail
        );
        echo view('manage/layout',$data);
    }

}