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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/admin/post', function () {
//    return view('welcome');
    return "admin is here";
});
Route::get('/contact',function (){
    return "its contact page";
});
Route::get('/post/{id}',function($id){
     return"its working" . $id;
});
Route::get('/post/{id}/{name}',function($id,$name){
    return"its parmater" .$id." " .$name;
});
Route::get('/admin/post/example',array('as'=>'admin.home',function(){
    $url = route ('admin.home');
    return "this url is" .$url;
}));