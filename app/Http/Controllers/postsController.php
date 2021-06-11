<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class postsController extends Controller
{
    public function index(){

        // returning the generated posts
       $posts= DB::select('select * from posts');

       dd($posts);
    }
// returning specific columns such as the body
    public function body(){
              $posts=DB::table('posts')
             ->select('body')
             ->get();
             dd($posts);

    }
//returning a particular title like  Prof
    public function prof(){
        $posts=DB::table('posts')
        ->where('title', 'Prof.')
        ->get();   
        
        dd($posts);
    }
//returning a particular title like MR 
    public function Mr(){
        $posts=DB::table('posts')
        ->where('title', 'Mr.')
        ->get();   
        
        dd($posts);
    }
//returning a particular title like MRs 
public function Mrs(){
    $posts=DB::table('posts')
    ->where('title', 'Mrs.')
    ->get();   
    
    dd($posts);
}
//returning a particular id 
// public function show(Posts$post){
//     return $posts ;
// }
 
     

        //posts between two ids
        // $posts=DB::table('posts')
        //       ->whereBetween('id', [2,6])
        //       ->get();

        //       dd($posts);
}


