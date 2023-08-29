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











Route::get("/admin_grader_request",[AdminDashboardController::class,"grader_request"]);
Route::get("/admin_ta_request",[AdminDashboardController::class,"ta_request"]);
Route::get("/admin_ta_request",[AdminDashboardController::class,"ta_apply_data_show"]);
Route::get("/admin_ta",[AdminDashboardController::class,"ta"]);
Route::get("/admin_ta", [AdminDashboardController::class, "showAdminTA"]);
Route::get("/admin_ta",[AdminDashboardController::class,"ta_list"]);
Route::get("/admin_grader",[AdminDashboardController::class,"grader"]);
Route::get("/admin_grader", [AdminDashboardController::class, "showAdminGrader"]);
Route::get("/admin_grader",[AdminDashboardController::class,"grader_list"]);
Route::get("/admin_grader_request",[AdminDashboardController::class,"grader_apply_data_show"]);
Route::post('/update-situationta/{id}', [AdminDashboardController::class, 'updateSituationta'])->name('update.situationta');
Route::post('/update-situationgrader/{id}', [AdminDashboardController::class, 'updateSituationgrader'])->name('update.situationgrader');


Route::post('/adminlogin2', function (Request $request) {
    $username = $request->input('username');
    $password = $request->input('password');

    // Replace with your desired admin credentials
    $adminUsername = 'admin';
    $adminPassword = '1234';
    if ($username === $adminUsername && $password === $adminPassword) {
        // Admin is verified, store the admin's status in the session
        $request->session()->put('isAdminLoggedIn', true);
        return redirect('/admin_dashboard');
    }

    // If login fails, redirect back to the login page with an error message
    return redirect('/adminlogin2')->with('error', 'Invalid credentials.');
});
