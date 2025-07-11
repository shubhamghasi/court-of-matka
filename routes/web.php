<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::view('version-2', 'version2');
Route::view('version-3', 'version3');
Route::view('version-4', 'version4');
Route::view('version-5', 'version5');
Route::view('version-6', 'version6');
