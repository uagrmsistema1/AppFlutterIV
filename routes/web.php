<?php

//use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource("json","jsonController");
Route::get("jsonusuarios","jsonController@usuarios");
