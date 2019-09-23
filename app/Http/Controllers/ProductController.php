<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getlistproduct(){
        return view('products');
    }
    public function getproductdetail(){
        return view('productdetail');
    }
}
