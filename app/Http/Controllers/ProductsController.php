<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function trial(){
        // print_r(route('produ')); 
        return view('products.trial');
    }

    public function show($id){
        return($id);
    }

    // public function names($name){
    //   $data = [
    //       'iphone'='the best phone in the city'
    //     //   'Android'⇒'the most marketed device',
    //   ];
    //   return view('products.index', [
    //       'products' ⇒$data[$name]
    //   ]);
    // }
}
