<?php

namespace App\Http\Controllers;

use App\Helper\Mod;
use App\Models\Tovars;
use Illuminate\Http\Request;

class buyController extends Controller
{
    function buy($id){
        if(Tovars::where('id',$id)->exists()){
            $data = Tovars::where('id', $id)->first();
            return view('tovar', $data);
        }else{
            Mod::session_message('Такого товара нет','warning');
            return redirect()->route('home');
        }
    }
}
