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

class Home extends BaseController
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
            'mostsaleslick' => $shop_product_md->getArrivalsProduct(10),
            'arrivals' => $shop_product_md->getArrivalsProduct(3),
            'featured' => $shop_product_md->getFeaturedProduct(3),
            'mostsale' => $shop_product_md->getMostSaleProduct(3),
            'banner' => $banner_md->getbanner(),
            'allcategory' => $shop_product_md->getAllCategory(100),
            'allproduct' => $shop_product_md->getAllProduct(100),
            'seo' => array_column($option_md->getOptions(), null, "name") 
        );    
        //print_r($this->base['option']); die();
        $this->session = \Config\Services::session();
        $this->session->start();
    }
    
    public function index()
    {
        $data['test'] = array(
            'subview'   => '/frontend/contents/home/index',
            'title'     => "Home",
            'base' => $this->base
        );
        
        echo view('frontend/layout',$data);
    }

    public function search()
    {
        $key =  $_GET['s']; 
        $home_md = new Home_model();
        $result = $home_md->livesearch($key);
        //print_r($result); die();
        
        $data['test'] = array(
            'subview'   => '/frontend/contents/search/search',
            'title'     => "Tìm kiếm với từ khóa ".$key,
            'result' => $result,
            'base' => $this->base
        );
        
        echo view('frontend/layout',$data);
    }

    public function livesearch($key){
        $home_md = new Home_model();
        $result = $home_md->livesearch($key);

        if(count($result)){
            echo json_encode($result);
        }else{
            echo json_encode('không tìm thấy kết quả');
        }
    }
}
