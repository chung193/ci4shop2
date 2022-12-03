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


class ShopCategory extends BaseController
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
        

        $category_md = new Shop_Category_model();
        // paginate
        $pager = service('pager');
        $page    = (int) (($this->request->getGet('page')) ?? 0);
        if($page > 0){
            $page--;
        }
        $perPage = 14;
        
        $category = $category_md->getShopCategorySlug($slug);
        //print_r($category);die();
        $category_id = $category_md->getShopCategoryIdSlug($slug);
        
        //print_r($category_id);die();
        if(!empty($_GET['price']) || !empty($_GET['order']) || !empty($_GET['status'])){
            if(!empty($_GET['price'])){
                $price = explode("-",$_GET['price']);
            }else{
                $price = array('0','1000000000');
            }
            if(!empty($_GET['order'])){
                $order = $_GET['order'];
            }else{
                $order = '';
            }

            if(!empty($_GET['status'])){
                $status = $_GET['status']; // available 
            }else{
                $status = '';
            }
            $total   = count($category_md->getCountFilter($category_id,$price['0'], $price['1'], $order, $status));
            //echo $total;
            $product = $category_md->getShopCategoryFilter($category_id,$price['0'], $price['1'], $order, $status, $perPage, $page*$perPage );
        }else{
            $total   = count($category_md->getCount($category_id));
            //echo $total.'---';
            $product = $category_md->getShopCategoryProductSlug($category_id, $perPage, $page*$perPage);
        }

        $pager_links = $pager->makeLinks($page+1, $perPage, $total);
        //print_r($product); die();
        $recent = $category_md->getShopCategoryProduct();
        $seo = $this->getSeoContent($category->id, 'shopcategory');
        $this->base['seo'] = $seo;
        //print_r($post);die();
        $data['test'] = array(
            'subview'   => '/frontend/contents/shop_category/shop_category',
            'title'     => $category->name,
            'category' => $category,
            'product' => $product,
            'recent_post' => $recent,
            'base' => $this->base,
            'pager_links' => $pager_links,
        );
        
        echo view('frontend/layout',$data);
    }
}
