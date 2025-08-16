<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/artilheiros', function () {
    return view('/artilheiros');
});
