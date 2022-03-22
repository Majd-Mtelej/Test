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
//   return view('welcome')->with('data1',3);
//    return view('welcome')->with(['data1'=>2,'data2'=>3]);
    /*$data=[];
    $data['id']=5;
    $data['name']='sami';
    return view('welcome',$data);*/
    return view('welcome');

});
route::get("test2",function (){
    return"test2";
})->name("a");
route::get('test3/{id}',function ($id){
    return $id;
})->name("a");
route::get('test4/{id?}',function (){
    return 'welcome';
});
route::namespace('Front')->group(function(){
   route::get('GetUserName','FirstController@GetUserName');
    route::resource('user','UserController');
});
route::get('index','Front\NewsController@GetIndex');
route::get('about','Front\NewsController@about');
/*route::group(['namespace'=>'Admin','prefix'=>'admin'],function (){
    route::get('all','AdminController@All');
    route::get('add','AdminController@Add');
    route::get('update','AdminController@Update');
    route::get('delete','AdminController@Delete');
});*/

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

