<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getproductincate($listproduct){
        $listproduct=Product::where('id_cate',$listproduct)->get();
        $categories=Category::all();
        return view('products',compact('listproduct','categories'));
    }
    public function getproductdetail(){
        return view('productdetail');
    }
}
