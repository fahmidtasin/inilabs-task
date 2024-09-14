<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShapeController;
use App\Http\Controllers\LoggerController;
//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', [ShapeController::class, 'show']);

Route::get('/log', [LoggerController::class, 'logMessages']);
