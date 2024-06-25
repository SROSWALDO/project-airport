<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatesController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('dates', DatesController::class);
