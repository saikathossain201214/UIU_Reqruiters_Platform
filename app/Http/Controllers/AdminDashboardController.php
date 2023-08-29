<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student_table;
use App\Models\Teacher_table;
use App\Models\Apply;
use App\Models\TA_List;
use App\Models\Grader_List;
use App\Models\RequestForm;
use Illuminate\Support\Facades\Validator;


use Illuminate\Support\Facades\DB;

class AdminDashboardController extends Controller
{
    //
    public function login(){
        return view("adminlogin2");
    }
    public function index(){
        return view("admin_dashboard");
    }
    public function student(){
        return view("admin_student");
    }
    public function teacher(){
        return view("admin_teacher");
    }
    public function allcourse(){
        return view("admin_allcourse");
    }
    public function course_details(){
        return view("admin_course_details");
    }
    public function course_name(){
        return view("admin_course_name");
    }
    public function grader_request(){
        return view("admin_grader_request");
    }
    public function ta_request(){
        return view("admin_ta_request");
    }
    public function ta(){
        return view("admin_ta");
    }
    public function grader(){
        return view("admin_grader");
    }
    

    
    function student_data(Request $request){

        $name = $request->input('name');
        $id = $request->input('id');
        $department = $request->input('department');
        $email = $request->input('email');
        $password = $request->input('password');
        $number = $request->input('number');
        $gender= $request->input('gender');
        $dob = $request->input('birthdaytime');

        $isInsertSuccess = Student_table::insert( ['name'=>$name, 'id'=>$id, 'department'=>$department, 'email'=>$email, 'password'=>$password, 'number'=>$number, 'gender'=>$gender, 'dob'=>$dob ]
        );

        if($isInsertSuccess) echo '<h1>Insert Success</h1>';
        else echo '<h1>Insert Failed</h1>';

       
    }

    function teacher_data(Request $request){

        $name = $request->input('name');
        $id = $request->input('id');
        $department = $request->input('department');
        $profession = $request->input('profession');
        $email = $request->input('email');
        $password = $request->input('password');
        $number = $request->input('number');
        $gender= $request->input('gender');
        $dob = $request->input('birthdaytime');

        if($profession == 'Lecturer') $pid = 6;
        if($profession == 'Assistant Professor') $pid = 5;
        if($profession == 'Associate Professor') $pid = 4;
        if($profession == 'Professor') $pid = 3;

        $isInsertSuccess = Teacher_table::insert( ['name'=>$name, 'id'=>$id, 'department'=>$department, 'profession'=>$profession, 'email'=>$email, 'password'=>$password, 'number'=>$number, 'gender'=>$gender, 'dob'=>$dob, 'pid'=>$pid ]
        );

        if($isInsertSuccess) echo '<h1>Insert Success</h1>';
        else echo '<h1>Insert Failed</h1>';

       
    }
    public function total_count(){
        $total_teacher = DB::table('teacher')->count();
        //$total_student = DB::table('student')->count();
        
        return view('admin_dashboard', ['total_teacher'=>$total_teacher] );//compact('total_teacher', 'total_student'));
    }

    function teacher_data_show(){
        $teacher_data = Teacher_table::all();
        return view('admin_teacher', ['teacher_data'=>$teacher_data]) ;

        //return view('');
    }
    function student_data_show(){
        $student_data = Student_table::all();
        return view('admin_student', ['student_data'=>$student_data]) ;

        //return view('');
    }