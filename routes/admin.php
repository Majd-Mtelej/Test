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

/*Route::get('/', function () {
    return view('welcome');
});*/
route::get('test1',function (){
    return"test1";
});
/*route::get('test1',function (){
    return"test1";
})->middleware('auth');*/
/*

/*
route::group(['namespace'=>'Admin','prefix'=>'admin','middleware'=>'auth'],function (){
*/
route::group(['namespace'=>'Admin','prefix'=>'admin'],function (){
route::get('all','AdminController@All');
route::get('add','AdminController@Add');
route::get('update','AdminController@Update');
route::get('delete','AdminController@Delete');
});
