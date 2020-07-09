<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    //
    function  getCategoryProduct($title,$id){
        $products = $this->marketService->getCategoryProduct($id);
        $categories =$this->marketService->getCategories();
        return view('products.categories')->with(['products'=>$products,'categories'=>$categories]);
    }
}
