<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Protype;
class ProtypeController extends Controller
{
    
    public function getTypeName()
    {
        $protypes = Protype::all();
        return view('layout.header', ['protypes' => $protypes]);
    }



}
