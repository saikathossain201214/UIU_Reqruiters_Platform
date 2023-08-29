<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DB;
use Illuminate\Support\Facades\Validator;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/student_login', 'App\Http\Controllers\StudentController@student_login')->name('student_login');
Route::post('/student_login', 'App\Http\Controllers\StudentController@student_loginPost')->name('student_login');
Route::get("/student_home",[StudentController::class,"home"]);
Route::get("/student_home",[StudentController::class,"courseFetch"]);
Route::get("/applybtn/{id}",[StudentController::class,"applyTa"]);
Route::get("/Deletebtn/{id}",[StudentController::class,"deleteTa"]);
Route::get("/student_ta_course",[StudentController::class,"taCourse"]);
Route::get('/student_profile', function () {
    return view('student_profile');
});
Route::get("/applyGbtn/{id}",[StudentController::class,"applyGrader"]);
Route::get("/deleteGbtn/{id}",[StudentController::class,"deleteGrader"]);
