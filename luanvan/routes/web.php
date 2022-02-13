<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//backend
Route::get('/admin', 'AdminController@index');
Route::get('/dashboard', 'AdminController@show_dashboard');
Route::post('/admin-dashboard', 'AdminController@dashboard');
Route::get('/logout', 'AdminController@logout');
Route::get('/name', 'AdminController@name');
Route::get('/customer', 'AdminController@__construct');




//frontend
Route::get('/', 'HomeController@index');
Route::get('/trang-chu','HomeController@index');
Route::post('/tim-kiem','HomeController@timkiem');

//Danh Mục- Thương hiệu Sản Phẩm trang chủ
Route::get('/danh-muc-san-pham/{category_id}','CategoryProduct@danhmuc');
Route::get('/thuong-hieu-san-pham/{brand_id}','BrandProduct@thuonghieu');
Route::get('/chi-tiet-san-pham/{product_id}','ProductController@chitiet');
Route::post('/binh-luan/{product_id}','ProductController@comment');


//Category_Product
Route::get('/add-category-product', 'CategoryProduct@add_category_product');
Route::get('/edit-category-product/{category_id}', 'CategoryProduct@edit_category_product');
Route::get('/delete-category-product/{category_id}', 'CategoryProduct@delete_category_product');
Route::get('/all-category-product', 'CategoryProduct@all_category_product');

Route::get('/unactive-category-product/{category_id}', 'CategoryProduct@unactive_category_product');
Route::get('/active-category-product/{category_id}', 'CategoryProduct@active_category_product');

Route::post('/save-category-product', 'CategoryProduct@save_category_product');
Route::post('/update-category-product/{category_id}', 'CategoryProduct@update_category_product');


//Brand Product
Route::get('/add-brand-product', 'BrandProduct@add_brand_product');
Route::get('/edit-brand-product/{brand_id}', 'BrandProduct@edit_brand_product');
Route::get('/delete-brand-product/{brand_id}', 'BrandProduct@delete_brand_product');
Route::get('/all-brand-product', 'BrandProduct@all_brand_product');

Route::get('/unactive-brand-product/{brand_id}', 'BrandProduct@unactive_brand_product');
Route::get('/active-brand-product/{brand_id}', 'BrandProduct@active_brand_product');

Route::post('/save-brand-product', 'BrandProduct@save_brand_product');
Route::post('/update-brand-product/{brand_id}', 'BrandProduct@update_brand_product');


// Product
Route::get('/add-product', 'ProductController@add_product');
Route::get('/edit-product/{product_id}', 'ProductController@edit_product');
Route::get('/delete-product/{product_id}', 'ProductController@delete_product');
Route::get('/all-product', 'ProductController@all_product');

Route::get('/unactive-product/{product_id}', 'ProductController@unactive_product');
Route::get('/active-product/{product_id}', 'ProductController@active_product');

Route::post('/save-product', 'ProductController@save_product');
Route::post('/save-product1', 'ProductController@save_product1');
Route::post('/update-product/{product_id}', 'ProductController@update_product');


// Cart
Route::post('/save-cart', 'CartController@save_cart');
Route::get('/show-cart', 'CartController@show_cart');
Route::get('/cart-ajax', 'CartController@cart_ajax');
Route::get('/delete-cart/{rowId}', 'CartController@delete_cart');
Route::post('/update-quantity', 'CartController@update_quantity');
Route::post('/add-cart-ajax','CartController@add_cart_ajax');



//Checkout
Route::get('/login-checkout', 'CheckoutController@login_checkout');
Route::get('/logout-checkout', 'CheckoutController@logout_checkout');
Route::post('/add-customer', 'CheckoutController@add_customer');
Route::post('/order-place', 'CheckoutController@order_place');
Route::post('/login-customer', 'CheckoutController@login_customer');
Route::get('/checkout', 'CheckoutController@checkout');
Route::get('/payment', 'CheckoutController@payment');
Route::post('/save-checkout', 'CheckoutController@save_checkout');
Route::get('/unactive-order/{order_id}', 'CheckoutController@unactive_order');
Route::get('/active-order/{order_id}', 'CheckoutController@active_order');
Route::get('/handcash', 'CheckoutController@handcash');


// Order
Route::get('/manage-order', 'CheckoutController@manage_order');
Route::get('/view-order/{orderId}', 'CheckoutController@view_order');
Route::get('/manages-order/{orderId}', 'CheckoutController@masnage_order');
Route::get('/delete-order/{orderId}', 'CheckoutController@delete_order');



// Email
Route::get('/sendmail','HomeController@send_mail');


//Trang ca nhan
Route::get('/ca-nhan', 'HomeController@ca_nhan');
Route::get('/ca-nhan1', 'HomeController@ca_nhan1');
Route::get('/theo-doi', 'HomeController@theo_doi');
Route::get('/theo-doi-co-so', 'HomeController@theo_doi_co_so');
Route::get('/dang-tin', 'HomeController@dang_tin');
Route::get('/yeu-thich/{product_id}', 'HomeController@yeu_thich');
Route::get('/thong-tin', 'HomeController@thong_tin');
Route::get('/dang-ky-cua-hang', 'HomeController@dang_ky');
Route::get('/xem-shop', 'HomeController@xem_shop');

//Trang đăng ký cửa hàng
Route::get('/store', 'HomeController@store');
Route::post('/save-store', 'HomeController@save_store');


// Cửa Hàng Cá nhân
Route::get('/cua-hang/{adminId}', 'StoreController@cua_hang');


// Coupon
Route::post('/check-coupon', 'CartController@check_coupon');
Route::get('/add-coupon', 'CouponController@add_coupon');
Route::get('/all-coupon', 'CouponController@all_coupon');
Route::post('/save-coupon', 'CouponController@save_coupon');
Route::get('/delete-coupon/{coupon_id}', 'CouponController@delete_coupon');

// Thống kê
Route::get('/all-statictical', 'StaticController@static');