<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\RequestForm;
use App\Models\Apply;
use App\Models\TA_List;
use App\Models\Grader_List;
use App\Models\CourseTeacher;

use md5;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class TeacherController extends Controller
{
    //
    public function loginShow(){
        return view("teacher_login");
    }

    public function login(Request $request){
              
        $tid = $request->username;
        $password = $request->password;
        $pass = md5($password);
        $users = DB::select("SELECT * FROM `teacher` WHERE `id`='$tid' and `password`='$pass'");
        foreach ($users as $user) {
            // $request->session()->put('id', $user->id);

            Session::put('id', $user->id);

            Session::put('name', $user->name);
            Session::put('image', $user->image);
           

            Session::put('email', $user->email);
            Session::put('department', $user->department);
            Session::put('profession', $user->profession);
            Session::put('room', $user->room);
            return redirect("teacher_home");
           
        }

    }

    
    public function home(){
        
         $id = Session::get('id');

        $data = DB::select("SELECT * FROM `course_teacher` WHERE `teacher_id`='$id'");
        return view('teacher_home', ['data' => $data]);
        //return$data;
       

    
    }
    
    public function course_view($id , $section){
        $data = DB::select("SELECT * FROM `ta_list` WHERE `section`='$section' AND `cid`='$id'");
        return view('teacher_course_view', ['data' => $data]);

        //return view("teacher_course_view");
    }
    public function ta_request(){
        return view("teacher_ta_request");
    }
    public function grader_request(){
        return view("teacher_grader_request");
    }

    public function showTeacherTARequest()
    {
        $credit = 1;
        $situation = 1;

        $ta_request_data = Apply::where('credit', '=', $credit)
                                ->where('situation', '=', $situation)
                                ->select('sname', 'sid', 'cname', 'cid', 'section')
                                ->get();

        return view('teacher_ta_request', ['ta_request_data' => $ta_request_data]);
    }

    public function showTeacherGraderRequest()
    {
        $credit = 3;
        $situation = 1;

        $grader_request_data = Apply::where('credit', '=', $credit)
                                ->where('situation', '=', $situation)
                                ->select('sname', 'sid', 'cname', 'cid', 'section')
                                ->get();

        return view('teacher_grader_request', ['grader_request_data' => $grader_request_data]);
    }

    public function deleteTeacherTa($id){
        $apply= Apply::where('sid','=',$id)->where('credit','1')->delete();
        return redirect("/teacher_ta_request");
    
       }
    public function deleteTeacherGrader($id){
        $apply= Apply::where('sid','=',$id)->where('credit','3')->delete();
        return redirect("/teacher_grader_request");
    
       }
    public function addTA($id)
       {
           // Find the entry in the original table
           $apply = Apply::where('sid','=',$id)->where('credit','1')->first();;
   
           // Create a new entry in the ta_list table
           $taListEntry = new TA_List();
           $taListEntry->sname = $apply->sname; // Copy relevant data
           $taListEntry->sid = $apply->sid;
           $taListEntry->cname = $apply->cname;
           $taListEntry->cid = $apply->cid;
           $taListEntry->section = $apply->section;
           $taListEntry->tname = $apply->tname;
           $taListEntry->tid = $apply->tid;
            // Copy other relevant data
           $taListEntry->save();
   
           // Delete the entry from the original table
           $apply->delete();
   
           return redirect("/teacher_ta_request");
       }   
    // public function courseFetch(){
    
    
    //     $id = Session('id');
    //     $id = request()->Session()->get('id');
    //     $courseTeacher = CourseTeacher::where('teacher_id','=',$id)->get();
    //     return view('teacher_home');
    
    //    }

    public function addGrader($id)
       {
           // Find the entry in the original table
           $apply = Apply::where('sid','=',$id)->where('credit','3')->first();;
   
           // Create a new entry in the ta_list table
           $graderListEntry = new Grader_List();
           $graderListEntry->sname = $apply->sname; // Copy relevant data
           $graderListEntry->sid = $apply->sid;
           $graderListEntry->cname = $apply->cname;
           $graderListEntry->cid = $apply->cid;
           $graderListEntry->section = $apply->section;
           $graderListEntry->tname = $apply->tname;
           $graderListEntry->tid = $apply->tid;
            // Copy other relevant data
           $graderListEntry->save();
   
           // Delete the entry from the original table
           $apply->delete();
   
           return redirect("/teacher_grader_request");
       }   

       public function teacherRequestForm()
          {
              return view('teacher_request');
       }
    

   
}
