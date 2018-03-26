<?php
if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
    // Ignores notices and reports all other kinds... and warnings
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    // error_reporting(E_ALL ^ E_WARNING); // Maybe this is enough
}
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['namespace'=>'Admin'],function(){
    Route::group(['prefix'=>'login','middleware'=>'CheckLogedIn'],function(){
        Route::get('/','LoginController@getLogin')->name('getLogin');
        
        Route::post('/','LoginController@postLogin')->name('postLogin');
    });
    Route::get('logout','HomeController@getLogout');
    Route::group(['prefix'=>'admin','middleware'=>'CheckLogedOut'],function(){
        Route::get('home','HomeController@getHome');
        Route::group(['prefix'=>'category'],function(){
            Route::get('/','CategorysController@getCate');
            Route::get('edit','CategorysController@getEditCate');
        });
    });
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('homepage', 'FrontController@homepage');
Route::get('change-language/{language}', 'HomeController@changeLanguage')->name('user.change-language');

Route::get('register', 'FrontController@getRegister');
Route::post('register', 'FrontController@postRegister');

Route::get('login', 'FrontController@getlogin');
Route::post('login', 'FrontController@postlogin');

Route::get('logout', 'FrontController@logout');
Route::get('product', 'FrontController@products');
Route::get('product-Detail/{id}', [
        'as' => 'productDetail',
        'uses' => 'FrontController@productDetail'
    ]);

Route::get('checkout', 'CartController@checkout');
Route::post('checkout', 'CartController@postcheckout');
Route::get('thanks', 'CartController@thanks');
//cart
Route::get('cart/add/{id}', 'CartController@addItem');
Route::get('cart', 'CartController@index');
Route::get('updateCart/{id}/{qty}','CartController@updateCart');
Route::get('delCart/{id}', 'CartController@deleteCart');
Route::post('seach','FrontController@seach');


