<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    function  index(){
        $products = $this->marketService->getProducts();
        $categories =$this->marketService->getCategories();

        return view('welcome')->with(['products'=>$products,
                                         'categories'=>$categories]);
    }
}
