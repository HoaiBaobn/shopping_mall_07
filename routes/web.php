<?php

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

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'backend'], function(){
   
   Route::group(['prefix'=>'users'], function(){
      Route::get('listUser', 'UserController@getlist');

      Route::get('addUser', 'UserController@getadd');

      Route::get('editUser', 'UserController@getedit');
   });

   Route::group(['prefix'=>'category'], function(){
      Route::get('listCat', 'CatController@getlist');

      Route::get('addCat', 'CatController@getadd');

      Route::get('editCat', 'CatController@getedit');
   });

   Route::group(['prefix'=>'product'], function(){
      Route::get('listPro', 'ProController@getlist');

      Route::get('addPro', 'ProController@getadd');

      Route::get('editPro', 'ProController@getedit');
   });

});