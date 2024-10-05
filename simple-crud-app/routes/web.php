<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('student/all', function () {
//     return view('student.index');
// });

Route::get('student/all',[StudentController::class,'index'])->name('student.index');




