<?php

namespace App\Http\Controllers;

use App\Helper\Mod;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class registerController extends Controller
{
    function register_form(Request $data){
        $Received_data = $data -> all();
        $email = $Received_data['email'];
        $login = $Received_data['login'];
        $password = $Received_data['password'];
        $passwordRepit = $Received_data['PasswordRepit'];
        if($login != '' && $password != '' && $passwordRepit != '' && $email != ''){
            $chek_profile = User::where('login',$login)->exists();
            if($password == $passwordRepit){
                if($chek_profile == false){
                    if(preg_match('/[a-z]/i',$login)){
                        if (preg_match("/([%$#<>*=&?]+)/", $login) && preg_match("/([%$#<>*=&?]+)/", $password)) {
                            Mod::session_message('Недопустимые символы!','warning');
                            return redirect()->route('register');
                        }else{
                            Mod::session_profile_add($login, $password);
                            DB::table('users')->insert([
                                'email' => $email, 
                                'login' => $login,
                                'password' => $password,
                             ]);
                            return redirect()->route('home');
                        }
                    }else{
                        Mod::session_message('Логин на англ, ФИО на рус','warning');
                        return redirect()->route('register');
                    } 
                }else{
                    Mod::session_message('Пользователь с таким логином уже есть','warning');
                    return redirect()->route('register');
                }
            }else{
                Mod::session_message('Второй пороль не совподает','warning');
                return redirect()->route('register');
            }
        }else{
            Mod::session_message('Не все поля заполнены','warning');
            return redirect()->route('register');
        }
    }

    function login_form(Request $data){
        Mod::session_check($data);
        $data_rip = $data -> all();
        $login = $data_rip['login'];
        $password = $data_rip['password'];
        if($login != '' && $password != ''){
            $chek_profile = User::where('login',$login)->exists();
                    if($chek_profile == false){
                        Mod::session_message('Такого пользователя нет','warning');
                        return redirect()->route('login');
                    }else{
                        if(preg_match('/[a-z]/i',$login)){
                            if (preg_match("/([%$#<>*=&?]+)/", $login) && preg_match("/([%$#<>*=&?]+)/", $password)) {
                                Mod::session_message('Недопустимые символы!','warning');
                                return redirect()->route('login');
                            }else{

                                Mod::session_profile_add($login, $password);
                                return redirect()->route('home');
                            }
                        }else{
                            Mod::session_message('Логин на англ','warning');
                            return redirect()->route('login');
                        } 
                    }
        }else{
            Mod::session_message('Не все поля заполнены','warning');
                return redirect()->route('login');
        }
    }
}
