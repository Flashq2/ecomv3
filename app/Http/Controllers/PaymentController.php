<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SplFileInfo;
use Symfony\Component\CssSelector\Node\FunctionNode;

class PaymentController extends Controller
{
    public function index(){
        return view('payment.payment');
    } 
    public function UnittestFunction(Request $request){
        return 1;
    }
}
