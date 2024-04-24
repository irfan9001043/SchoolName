<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Route::get('/', function () {
//     return view('rakib');
// });

Route::get('/',[StudentController::class,'index']);
Route::get('/dashboard',[StudentController::class,'about'])->name('dashboard');


// Route::get('/',[StudentController::class,'index'])->name('static')


