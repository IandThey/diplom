<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\Mod;
use App\Models\go_katalogs;
use App\Models\so_katalogs;

class katalogController extends Controller
{
    function directory_call_so(){
        $katalog = so_katalogs::all();
        return view ('so_katalogs', ['katalog' => $katalog]);
    }
    function directory_call_go(){
        $katalog = go_katalogs::all();
        return view ('go_katalogs', ['katalog' => $katalog]);
    }
}
