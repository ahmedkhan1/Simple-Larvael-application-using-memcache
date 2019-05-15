<?php
/**
 * Created by PhpStorm.
 * User: Delll
 * Date: 25-Dec-18
 * Time: 2:06 AM
 */
Route::get('/',function (){
    return view('welcome');
});


Route::get('/contact',function (){
    return view('user_controller.contact_us');
});

Route::get('home/{param}',function ($param){
    return view('user_controller.home');
});

Route::get('test/{name}/{email}',function ($name,$email){
    return "My name is ".$name." and my email is".$email;
});

Route::get('about-us',function (){
    return view('user_controller.about_us');
});

Route::get('hello','user_controller@index');

Route::get('tests/',array('as' => 'admin.home',function (){
    $url=route('admin.home');
    return "this url".$url;
}));

/*Route::get('/dashboard/{name?}', function ($name = null){
    return $name;
});*/

/*Route::get('/home/{param}','user_controller@home');*/




/*
|
|----------------------------------------
| Application Routes
|----------------------------------------
|
*/
Route::group(['middleware' => ['web']],function (){

});
