<?php

namespace App\Helper;

use Illuminate\Http\Request;

class Mod{

    public static function session_message($message, $type){
        session([
            'alert' => $message, 
            'alert_type' => $type
        ]);
    }

    public static function session_profile_add($login, $password){
        session([
            'login' => $login, 
            'password' => $password
        ]);
    }

    public static function session_check(Request $request){
        $data = $request->session()->all();
        if($data == null){
            return redirect()->route('home');
        }
    }
}

?>