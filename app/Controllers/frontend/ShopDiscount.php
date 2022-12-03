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
use App\Models\frontend\Shop_Discount_model;
use App\Models\frontend\Category_model;


class ShopDiscount extends BaseController
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
    
    public function index($slug='')
    {
        $discount_md = new Shop_Discount_model();
        $category_md = new Category_model();
        $recent = $category_md->getCategoryRecentPost();
        if($slug == ''){
            $discount = $discount_md->getAll();
            
            $seo = array(
                'meta_title' => 'Các chương trình khuyến mại từ Macstore',
                'meta_description' =>'Các chương trình khuyến mại từ Macstore',
            );
            $this->base['seo'] = (object)$seo;
            $data['test'] = array(
                'subview'   => '/frontend/contents/shop_discount/alldiscount',
                'title'     => 'Khuyến mại',
                'discount' => $discount,
                'recent_post' => $recent,
                'base' => $this->base
            );
        }else{
            $discount = $discount_md->getShopDiscountSlug($slug);
        
            $seo = array(
                'meta_title' => $discount->title,
                'meta_description' => $discount->title,
            );
            $this->base['seo'] = (object)$seo;
            $data['test'] = array(
                'subview'   => '/frontend/contents/shop_discount/discount',
                'title'     => $discount->title,
                'discount' => $discount,
                'recent_post' => $recent,
                'base' => $this->base
            );
        }
        
        
        echo view('frontend/layout',$data);
    }
}
