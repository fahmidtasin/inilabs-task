<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShapeController;
use App\Http\Controllers\LoggerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AnimalController;
//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', [ShapeController::class, 'show']);

Route::get('/log', [LoggerController::class, 'logMessages']);

Route::get('/employee', [EmployeeController::class, 'manageEmployee']);

Route::get('/animals', [AnimalController::class, 'makeSounds']);
