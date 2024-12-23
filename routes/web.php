<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use Laravel\Horizon\Horizon;

Route::get('/horizon', function () {
    return redirect('/horizon');
});
