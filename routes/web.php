<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShapeController;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [ShapeController::class, 'show']);
