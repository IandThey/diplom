<?php

namespace App\Http\Controllers;

use App\Models\tovars;
use Illuminate\Http\Request;

class tovarController extends Controller
{
    function G_tovar($id){
        $obj_tovar = tovars::where('id', $id)->get();
        return view('g_tovar',['obj_tovar' => $obj_tovar]);
    }
}
