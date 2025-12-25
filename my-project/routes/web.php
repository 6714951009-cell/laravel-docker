<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    $results = DB::table('TBL_Users')->get();
    return view('welcome');
});

Route::get('/welcome', function () {
    $results = DB::table('TBL_Users')->get();
    return $results;
});

Route::get('/welcome', function () {
    return view('welcome');
});

