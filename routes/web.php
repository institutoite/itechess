<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('info/peon',function(){
    return view("peon.index");
});

Route::get('info/torre',function(){
    return view("torre.index");
});
