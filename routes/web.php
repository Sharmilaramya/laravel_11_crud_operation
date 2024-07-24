<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employeeController;


Route::get('/', function () {
    return view('welcome');
});


Route::resource("/employee", employeeController::class);
