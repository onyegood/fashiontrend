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

Route::get('/', function () {
    return view('landingpage');
});

Route::group(['middleware' => 'web'], function () {

        Auth::routes();

        //Admin group
        Route::group(['middleware' => ['auth','admin']], function () {
            Route::get('/admin/user/dashboard', 'AdminController@getAdminDashboard')->name('dashboard');
            Route::get('/admin/user/profile', 'AdminController@getProfile')->name('profile');
            Route::get('/admin/user/inbox', 'AdminController@getInbox')->name('inbox');
            Route::get('/admin/user/settings', 'AdminController@getSettings')->name('settings');

            /*===========Product Routes===============*/
            //Add new product form
            Route::get('/admin/product/add-new-product', 'MarketProductBackController@getAddNewProduct')->name('addnewproduct');
            //Add insert logic
            Route::post('/admin/product/create-new-product', 'MarketProductBackController@postCreateProduct')->name('createproduct');
            //Get all products
            Route::get('/admin/product/all-products', 'MarketProductBackController@getAllProducts')->name('allproducts');
            //Get single product
            Route::get('/admin/product/detail/{id}', 'MarketProductBackController@getProductById')->name('productdetail');
            //Load into form for editing
            Route::get('/admin/product/edit-product/{id}', 'MarketProductBackController@getEditProduct')->name('editproduct');
            //Delete product
            Route::get('/admin/product/delete-product/{id}', 'MarketProductBackController@gettDeletProduct')->name('deleteproduct');
            //Edit item
            Route::post('/admin/product/edit-product/{id}', 'MarketProductBackController@postEditProduct')->name('editnow');
            /*===========Product Routes===============*/

            Route::get('/admin/product/category-brand', 'MarketProductBackController@getAddCatAndBrand')->name('categoryandbrand');

            Route::post('/admin/product/add-category', 'MarketProductBackController@postCategory')->name('addcategory');

            Route::post('/admin/product/add-brand', 'MarketProductBackController@postBrand')->name('addbrand');

            /*===========Order Routes===============*/
            Route::get('/admin/product/order-list', 'MarketProductBackController@getProductOrder')->name('orderlist');





            /*===========Order Routes===============*/



        });

        //Customer group
        Route::group(['middleware' => ['auth','customer']], function () {
            Route::get('/customer/dashboard', 'CustomerController@index')->name('index');
        });

        //Merchant group
        Route::group(['middleware' => ['auth','merchant']], function () {
            Route::get('/merchant/dashboard', 'MerchantController@index')->name('index');
        });

        Route::get('/home', 'HomeController@index')->name('home');

        //Market Product Front Routes
        Route::get('/company/contact-us', 'MarketProductFrontController@contactUs')->name('contact');
        Route::get('/products/shop/collections', 'MarketProductFrontController@getShop')->name('collections');
        Route::get('/products/shop/single-product', 'MarketProductFrontController@getSingleProduct')->name('singleproduct');
        Route::get('/products/shop/hot-sales', 'MarketProductFrontController@getHotSales')->name('hotsales');
        Route::get('/products/shop/blog', 'MarketProductFrontController@getBlog')->name('blog');
        Route::get('/products/shop/single-blog', 'MarketProductFrontController@getSingleBlog')->name('singleblog');
        Route::get('/products/shop/my-cart', 'MarketProductFrontController@getCart')->name('cart');
        Route::get('/products/shop/checkout', 'MarketProductFrontController@getCheckout')->name('checkout');
        Route::get('/products/shop/order-completed', 'MarketProductFrontController@getOrderCompleted')->name('ordercompleted');
        Route::get('/products/shop/category-list', 'MarketProductFrontController@getCategoryList')->name('categorylist');
        Route::get('/products/shop/wish-list', 'MarketProductFrontController@getWishList')->name('wishlist');




});

