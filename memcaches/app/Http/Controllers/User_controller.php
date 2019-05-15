<?php
/**
 * Created by PhpStorm.
 * User: Delll
 * Date: 14-Sep-18
 * Time: 2:44 AM
 */

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class User_controller extends Controller{


    public function index(){
        $memcache = 'Using memcache';

        $users = Cache::remember("key",6999,function(){
            return DB::table('users')->get();
        });
        //$val = Cache::pull('key');

        if(Cache::get('key') === null){
            $memcache = "Using database";
        }

        return view('pages.home',compact('users','memcache'));
    }
    public function about_us(){
        return view('pages.about');
    }



}