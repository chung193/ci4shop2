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


class Page extends BaseController
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
    
    public function index($slug)
    {
        $page_md = new Page_model();
        $page = $page_md->getPageSlug($slug);
        $seo = $this->getSeoContent($page->id, 'page');
        $this->base['seo'] = $seo;
        // print_r($page);die();
        $data['test'] = array(
            'subview'   => '/frontend/contents/page/page',
            'title'     => $page->title,
            'page' => $page,
            'base' => $this->base
        );
        
        echo view('frontend/layout',$data);
    }
}
