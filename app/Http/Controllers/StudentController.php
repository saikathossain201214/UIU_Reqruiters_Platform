<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Pdf;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;
use App\Models\CourseTeacher;
use App\Models\Apply;
use App\Models\Research;
use App\Models\TaAssigned; 
use App\Models\TA_List;
use App\Models\Grader_list;
use Illuminate\Support\Facades\DB;
use md5;
use Session;
use Illuminate\Support\Facades\Auth;
class StudentController extends Controller
{

   
    public function student_login(){
        return view('student_login');

    }

    public function student_loginPost(Request $request){
        
        $request->validate([
          'username' =>'required',
          'password'=>'required'

        ]);

        $student = Student::where('id','=',$request->username)->first();
       
        if($student){

            if(md5(($request->password) ===  ($student->password))){
                     $request->session()->put('loginId', $student->id);
                     
                     Session::put('name', $student->name);
                     Session::put('image', $student->image);
                     Session::put('cgpa', $student->cgpa);
                     Session::put('id', $student->id);
                     Session::put('email', $student->email);
                     Session::put('department', $student->department);
                     Session::put('number', $student->number);
                     return redirect()->intended('student_profile');

                    
            }
            else{
                return back()->with('error', 'This mail failed');
            }
        }
        else{
              return back()->with('error', 'This mail failed');
        }
    }
    public function home(){
        return view("student_profile");
    }
   
   public function courseFetch(){
    $credit = '1';
    $courses = Course::where('credit','=',$credit)->get();

    $id = Session('id');
    $id = request()->Session()->get('id');
    $apply = Apply::where('sid','=',$id)->where('credit', '1')->get();
    return view('student_home', compact('courses', 'apply'));

   }
   public function applyTa($id){
    $course = Course::where('id','=',$id)->where('credit','1')->first();
    $sid = request()->session()->get('id');
    $sname = request()->session()->get('name');
    $cgpa = request()->session()->get('cgpa');
    $student = Student::where('id','=',$sid)->first();
    $Apply = new Apply;
    $Apply->sname = $sname;
    $Apply->sid = $sid;
    $Apply->cgpa = $student->cgpa;
    $Apply->cname = $course->cname;
    $Apply->cid = $course->cid;
    $Apply->section = $course->section;
    $Apply->tname = $course->tname;
    $Apply->ctimestart = $course->ctimestart;
    $Apply->ctimeend = $course->ctimeend;
    $Apply->tid = $course->tid;
    $Apply->credit = $course->credit;
     $Apply->save();
     return redirect("/student_home");


   }

   public function deleteTa($id){
    $apply= Apply::where('id','=',$id)->where('credit', '1')->delete();
    return redirect("/student_home");

   }

   public function showUpdateForm() {
    $sid = request()->session()->get('id');
    
    $student = Student::where('id', '=', $sid)->first();
    
    return view('student_update_info', compact('student'));
    }

    public function updateInfo(Request $request)
  {
     
      $loginId = request()->Session()->get('id');
      $cgpa=$request->cgpa;
      $number=$request->number;
      $img_name = $_FILES['image']['name'];
	    $img_size = $_FILES['image']['size'];
	    $tmp_name = $_FILES['image']['tmp_name'];
	    $error = $_FILES['image']['error'];
      $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

      if (in_array($img_ex_lc, $allowed_exs)) {
        $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database

        $data = DB::update("UPDATE `student` SET `number`='$number',`image`='$new_img_name',`cgpa`='$cgpa' WHERE id='$loginId'");

        
    }
    return redirect("student_profile");

}
   

 
  

  public function courseFetchGrader(){
    $credit = '3';
    $courses = Course::where('credit','=',$credit)->get();

    $id = Session('id');
    $id = request()->Session()->get('id');
    $apply = Apply::where('sid','=',$id)->where('credit','3')->get();
    return view('student_grader', compact('courses', 'apply'));

   }

  public function applyGrader($id){
    $course = Course::where('id','=',$id)->where('credit','3')->first();
    $sid = request()->session()->get('id');
    $sname = request()->session()->get('name');
    $cgpa = request()->session()->get('cgpa');
    $student = Student::where('id','=',$sid)->first();
    $Apply = new Apply;
    $Apply->sname = $sname;
    $Apply->sid = $sid;
    $Apply->cgpa = $student->cgpa;
    $Apply->cname = $course->cname;
    $Apply->cid = $course->cid;
    $Apply->section = $course->section;
    $Apply->tname = $course->tname;
    $Apply->ctimestart = $course->ctimestart;
    $Apply->ctimeend = $course->ctimeend;
    $Apply->tid = $course->tid;
    $Apply->credit = $course->credit;
     $Apply->save();
     return redirect("/student_grader");


   }
   public function deleteGrader($id){
    $apply= Apply::where('id','=',$id)->where('credit', '3')->delete();
    return redirect("/student_grader");

   }

public function research(){
    return view("student_research");
   }

   public function researchPost(Request $request){

    $request->validate([
        'topic' =>'required',
    

      ]);
      $sid = request()->session()->get('id');
      $sname = request()->session()->get('name');
      $topic = $request->topic;
      $researchin = new Research;

      $researchin->save;

      return redirect('/student_research');
   }


   public function counselling(){
    return view("student_counselling");
   }

   public function materials(){
    return view("student_course_materials");
    }

   public function taCourse(){
      $ta_data = TA_List::all();
      return view('student_ta_course', ['ta_data'=>$ta_data]) ;

      //return view('');
     }

  public function graderCourse(){
    $grader_data = Grader_List::all();
    return view('student_grader_course', ['grader_data'=>$grader_data]) ;

    //return view('');
    }
  
}

