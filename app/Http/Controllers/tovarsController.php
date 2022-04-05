<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\Mod;
use App\Models\tovars;

class tovarsController extends Controller
{
    function Unloading_go($type){
        $tovar = tovars::where('type_tovar', $type)->get();
        return view ('tovar', ['tovar' => $tovar]);
    }
    function Unloading_so($type){
        $tovar = tovars::where('type_tovar', $type)->get();
        return view ('tovar', ['tovar' => $tovar]);
    }
}
