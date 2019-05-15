<?php
use App\Post;
use App\User;
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

Route::get('/',function (){
    return view('pages/home');
});


Route::get('/users/view','User_controller@index');

Route::get('/users/insert',function (){
    $user = new User();

    $user->name ="John wick";
    $user->address = "Unknown";
    $user->email = "wick_boogieman@gmail.com";
    $user->telephone = 03000030;

    $user->save();

    //Remove Cache
    Cache::pull('key');
});

Route::get('/remove/{id}',function ($id){
    $user = User::find($id);
    $user->delete();
    echo "User id:".$id." deleted";
    
    //Remove Cache
    Cache::pull('key');
});

Route::get('/about-us', 'User_controller@about_us');

