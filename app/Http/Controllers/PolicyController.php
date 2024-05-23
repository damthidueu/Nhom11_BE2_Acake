<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Protype;
class PolicyController extends Controller
{
    
     //trang index (trang chu)
     public function policy(){
        return view('layout.shippingpolicy');
    }



}
