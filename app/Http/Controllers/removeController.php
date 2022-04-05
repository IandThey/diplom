<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class removeController extends Controller
{
    function remove(){
        session()->flush();
        return redirect()->route('home');
    }
}
