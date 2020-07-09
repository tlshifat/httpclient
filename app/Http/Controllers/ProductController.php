<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function  getProduct($title,$id){
        $product = $this->marketService->getProduct($id);
        $categories =$this->marketService->getCategories();
        return view('products.show')->with(['product'=>$product,'categories'=>$categories]);
    }
}
