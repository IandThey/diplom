<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class profileController extends Controller
{
    function profileLoad(){
        
        $profile = User::where('login', session('login'))->get();
        return view('profile',['profile' => $profile]);
    }
}
