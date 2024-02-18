<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductInfoController extends Controller
{
    public function index(){
        return view('product_info.product_info');
    }
}
