<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/katalog_go', function () {
    return view('katalog_go');
})->name('katalog_go');

Route::get('/katalog_so', function () {
    return view('katalog_so');
})->name('katalog_so');

Route::get('/about_company', function () {
    return view('about_company');
})->name('about_company');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/login', function(){
    if(session('login')){
        return redirect()->route('home');
    }
    return view('login');
})->name('login');

Route::post('/login', 'App\Http\Controllers\registerController@login_form');

Route::get('/register', function () {
    if(session('login')){
        return redirect()->route('home');
    }
    return view('register');
})->name('register');

Route::post('/register', 'App\Http\Controllers\registerController@register_form');

Route::get('/profile', 'App\Http\Controllers\profileController@profileLoad')->name('profile');

Route::get('/so_katalogs', function () {
    return view('so_katalogs');
})->name('so_katalogs');

Route::get('/so_katalogs', 'App\Http\Controllers\katalogController@directory_call_so')->name('so_katalogs');

Route::get('/go_katalogs', function () {
    return view('go_katalogs');
})->name('go_katalogs');

Route::get('/go_katalogs', 'App\Http\Controllers\katalogController@directory_call_go')->name('go_katalogs');

Route::get('/go_katalogs/{type}', 'App\Http\Controllers\tovarsController@Unloading_go');

Route::get('/so_katalogs/{type}', 'App\Http\Controllers\tovarsController@Unloading_so');

Route::get('/so_katalogs/tovars/{id}','App\Http\Controllers\tovarController@G_tovar');

Route::get('/go_katalogs/tovars/{id}','App\Http\Controllers\tovarController@G_tovar');

Route::get('/remove','App\Http\Controllers\removeController@remove');

Route::get('/kabinet','App\Http\Controllers\arendController@kabinet')->name('kabinet');