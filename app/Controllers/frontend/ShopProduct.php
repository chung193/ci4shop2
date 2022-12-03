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
use App\Models\frontend\Post_model;


class ShopProduct extends BaseController
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
        // echo $slug;die();
        $product_md = new Shop_Product_model();
        $product = $product_md->getShopProductSlug($slug);
        // print_r($product); die();
        $random = $product_md->getRandomProduct(10);
        // print_r($random); die();
        if($product->parent_id == 0){
            $child = $product_md->getShopChildProduct($product->id);
        }else{
            $parent = $product_md->getShopProductIdObject($product->parent_id);
            $child  = $product_md->getShopChildProduct($parent->id);
            //print_r($child); die();
        }
        
        //print_r($child); die();
        $seo = $this->getSeoContent($product->id, 'product');
        $this->base['seo'] = $seo;
        $data['test'] = array(
            'subview'   => '/frontend/contents/shop_product/shop_product',
            'title'     => $product->name,
            'product' => $product,
            'child' => $child,
            'random' => $random,
            'base' => $this->base
        );
        
        echo view('frontend/layout',$data);
    }
}
