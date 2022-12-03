<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */
$routes->get('auth/logout', 'auth\Login::logout');
// auth
$routes->group('auth', ['filter' => 'noauth'], function ($routes) {
    $routes->get('login', 'auth\Login::index', ['as' => 'login']);
    $routes->post('auth', 'auth\Login::auth');
    $routes->get('register', 'auth\Register::index');
    $routes->post('register/save', 'auth\Register::save');
    $routes->get('forgot', 'auth\Forgot::index');
    $routes->post('sendresetlink', 'auth\Forgot::sendresetlink');
    $routes->get('redirect/(:num)/(:any)', 'auth\Forgot::loadresetpage/$1/$2'); // 1st param is id, 2nd is token
    $routes->post('resetpassword', 'auth\Forgot::updatepassword');
});

$routes->group('manage', ['filter' => 'auth'], function ($routes) {

    // crawl
    $routes->get('crawl', 'manage/Crawl::index');
    $routes->post('crawl', 'manage/Crawl::index');

    $routes->get('crawl/post', 'manage/Crawl::post');
    $routes->post('crawl/post', 'manage/Crawl::post');
    // customer
    $routes->get('customer', 'manage\Customer::index');

    // customer
    $routes->get('order', 'manage\ShopOrder::index');

    // discount
    $routes->get('discount', 'manage\Discount::index');
    
    // shop-ui
    $routes->get('shop-ui', 'manage\ShopUi::index');

    // shop-slider
    $routes->get('shop-slider', 'manage\ShopSlider::index');

    // shop-producer
    $routes->get('shop-producer', 'manage\ShopProducer::index');

    // shop category
    $routes->get('shop-category', 'manage\ShopCategory::index');

    // shop product
    $routes->get('shop-product', 'manage\ShopProduct::index');

    // order
    $routes->get('order', 'manage\ShopOrder::index');
    $routes->add('order/detail/(:num)', 'manage\ShopOrder::detail/$1');
    $routes->get('order/add', 'manage\ShopOrder::add');
    $routes->post('order/save', 'manage\ShopOrder::save');
    $routes->post('order/update', 'manage\ShopOrder::update');
    $routes->get('order/delete/(:num)', 'manage\ShopOrder::delete');

    // customer
    $routes->add('customer/edit/(:num)', 'manage\Customer::edit/$1');
    $routes->get('customer/add', 'manage\Customer::add');
    $routes->post('customer/save', 'manage\Customer::save');
    $routes->post('customer/update', 'manage\Customer::update');
    $routes->get('customer/delete/(:num)', 'manage\Customer::delete/$1');

    // discount
    $routes->get('discount', 'manage\Discount::index');
    $routes->add('discount/edit/(:num)', 'manage\Discount::edit/$1');
    $routes->get('discount/add', 'manage\Discount::add');
    $routes->post('discount/save', 'manage\Discount::save');
    $routes->post('discount/update', 'manage\Discount::update');
    $routes->get('discount/delete/(:num)', 'manage\Discount::delete/$1');

    // shop_ui
    $routes->add('shop-ui/edit/(:num)', 'manage\ShopUi::edit/$1');
    $routes->get('shop-ui/add', 'manage\ShopUi::add');
    $routes->post('shop-ui/save', 'manage\ShopUi::save');
    $routes->post('shop-ui/update', 'manage\ShopUi::update');
    $routes->get('shop-ui/delete/(:num)', 'manage\ShopUi::delete/$1');

    // shop_category
    $routes->add('shop-category/edit/(:num)', 'manage\ShopCategory::edit/$1');
    $routes->get('shop-category/add', 'manage\ShopCategory::add');
    $routes->post('shop-category/save', 'manage\ShopCategory::save');
    $routes->post('shop-category/update', 'manage\ShopCategory::update');
    $routes->get('shop-category/delete/(:num)', 'manage\ShopCategory::delete/$1');

     // producer
     $routes->add('shop-producer/edit/(:num)', 'manage\ShopProducer::edit/$1');
     $routes->get('shop-producer/add', 'manage\ShopProducer::add');
     $routes->post('shop-producer/save', 'manage\ShopProducer::save');
     $routes->post('shop-producer/update', 'manage\ShopProducer::update');
     $routes->get('shop-producer/delete/(:num)', 'manage\ShopProducer::delete/$1');

    // shop-product
    $routes->add('shop-product/edit/(:num)', 'manage\ShopProduct::edit/$1');
    $routes->get('shop-product/add', 'manage\ShopProduct::add');
    $routes->post('shop-product/save', 'manage\ShopProduct::save');
    $routes->post('shop-product/update', 'manage\ShopProduct::update');
    $routes->get('shop-product/delete/(:num)', 'manage\ShopProduct::delete/$1');


    // dashboard
    $routes->get('dashboard', 'manage\Dashboard::index');
    $routes->get('category', 'manage\Category::index');
    // page
    $routes->get('page', 'manage\Page::index');
    // shop-info
    $routes->get('info', 'manage\Info::index');
    // profile
    $routes->get('profile', 'manage\Profile::index');
    $routes->post('profile/update', 'manage\Profile::update');

    $routes->get('permission/(:num)', 'manage\Permission::index/$1');
    $routes->post('save-permission', 'manage\Permission::savePermission');
    // category
    $routes->add('category/edit/(:num)', 'manage\Category::edit/$1');
    $routes->get('category/add', 'manage\Category::add');
    $routes->post('category/save', 'manage\Category::save');
    $routes->post('category/update', 'manage\Category::update');
    $routes->get('category/delete/(:num)', 'manage\Category::delete/$1');


    // user group
    $routes->get('user-group', 'manage\User_group::index');
    $routes->get('user-group/add', 'manage\User_group::add');
    $routes->get('user-group/edit/(:num)', 'manage\User_group::edit/$1');
    $routes->post('user-group/save', 'manage\User_group::save');
    $routes->post('user-group/update', 'manage\User_group::update');
    $routes->get('user-group/delete/(:num)', 'manage\User_group::delete/$1');


    // menu
    $routes->get('menu', 'manage\Menu::index');
    $routes->get('menu/add', 'manage\Menu::add');
    $routes->get('menu/edit/(:num)', 'manage\Menu::edit/$1');
    $routes->post('menu/save', 'manage\Menu::save');
    $routes->post('menu/update', 'manage\Menu::update');
    $routes->get('menu/delete/(:num)', 'manage\Menu::delete/$1');
    $routes->get('menu/item/(:num)', 'manage\Menu::item/$1');
    $routes->post('menu/updateitem', 'manage\Menu::saveitem');

    // page
    $routes->get('page/add', 'manage\Page::add');
    $routes->get('page/edit/(:num)', 'manage\Page::edit/$1');
    $routes->post('page/save', 'manage\Page::save');
    $routes->post('page/update', 'manage\Page::update');
    $routes->get('page/delete/(:num)', 'manage\Page::delete/$1');

    // seo
    $routes->get('seo', 'manage\Seo::index');
    $routes->get('seo/add', 'manage\Seo::add');
    $routes->get('seo/edit/(:num)', 'manage\Seo::edit/$1');
    $routes->post('seo/save', 'manage\Seo::save');
    $routes->post('seo/update', 'manage\Seo::update');
    $routes->get('seo/delete/(:num)', 'manage\Seo::delete/$1');

    // post
    $routes->get('post', 'manage\Post::index');
    $routes->get('post/edit/(:num)', 'manage\Post::edit/$1');
    $routes->get('post/add', 'manage\Post::add');
    $routes->post('post/save', 'manage\Post::save');
    $routes->post('post/update', 'manage\Post::update');
    $routes->get('post/delete/(:num)', 'manage\Post::delete/$1');
    $routes->get('post/restore/(:num)', 'manage\Post::restore/$1');
    $routes->get('post/delete-from-trash/(:num)', 'manage\Post::delete_from_trash/$1');

    // user
    $routes->get('user', 'manage\User::index');
    $routes->get('user/add', 'manage\User::add');
    $routes->get('user/edit/(:num)', 'manage\User::edit/$1');
    $routes->post('user/save', 'manage\User::save');
    $routes->post('user/update', 'manage\User::update');
    $routes->get('user/delete/(:num)', 'manage\User::delete/$1');

    // option
    $routes->get('options', 'manage\Options::index');
    $routes->post('options/save', 'manage\Options::save');

    // shop_info
    $routes->add('info/edit/(:num)', 'manage\Info::edit/$1');
    $routes->get('info/add', 'manage\Info::add');
    $routes->post('info/save', 'manage\Info::save');
    $routes->post('info/update', 'manage\Info::update');
    $routes->get('info/delete/(:num)', 'manage\Info::delete/$1');

    // shop_slider
    $routes->get('slider', 'manage\Slider::index');
    $routes->add('slider/edit/(:num)', 'manage\Slider::edit/$1');
    $routes->get('slider/add', 'manage\Slider::add');
    $routes->post('slider/save', 'manage\Slider::save');
    $routes->post('slider/update', 'manage\Slider::update');
    $routes->get('slider/delete/(:num)', 'manage\Slider::delete/$1');

});

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');
// frontend
$routes->get('/', 'frontend\Home::index');
// Bài viết và trang

// chuyen muc
$routes->get('/danh-muc/(:any)', 'frontend\Category::index/$1');
// bai viet
$routes->get('/bai-viet/(:any)', 'frontend\Post::index/$1');



// Khach hang
$routes->get('/khach-hang/dang-ky', 'frontend\Customer::register');
$routes->get('/khach-hang/dang-nhap', 'frontend\Customer::login');
$routes->get('/khach-hang/dang-xuat', 'frontend\Customer::logout');

$routes->post('/khach-hang/xac-thuc', 'frontend\Customer::auth');
$routes->post('/khach-hang/luu-thong-tin', 'frontend\Customer::save');

// sản phẩm
// danh mục
$routes->get('/danh-muc-san-pham/(:any)', 'frontend\ShopCategory::index/$1');
// chi tiết sản phẩm
// giỏ hàng
$routes->post('/gio-hang/them-vao-gio', 'frontend\ShopCart::addcart');
$routes->get('/gio-hang/xoa-khoi-gio', 'frontend\ShopCart::removeitem');
$routes->post('/gio-hang/cap-nhat-gio', 'frontend\ShopCart::updateitem');
$routes->get('/gio-hang/lay-gio-hang', 'frontend\ShopCart::getcart');
$routes->get('/gio-hang', 'frontend\ShopCart::index');
$routes->get('/gio-hang/xoa-gio-hang', 'frontend\ShopCart::deletecart');
$routes->get('/gio-hang/dem-gio-hang', 'frontend\ShopCart::countcart');

$routes->get('/gio-hang/checkout', 'frontend\ShopCart::checkout');
$routes->post('/gio-hang/hoan-tat', 'frontend\ShopCart::order_info');

$routes->get('/san-pham/(:segment)', 'frontend\ShopProduct::index/$1');

// khuyến mại
$routes->get('/khuyen-mai/', 'frontend\ShopDiscount::index');
$routes->get('/khuyen-mai/(:segment)', 'frontend\ShopDiscount::index/$1');

// tìm kiếm
$routes->get('/search/', 'frontend\Home::search');

// trang
$routes->get('/(:segment)', 'frontend\Page::index/$1');


// đăng nhập
// checkout
// xác nhận đặt hàng

$routes->get('/livesearch/(:any)', 'frontend\Home::livesearch/$1');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
