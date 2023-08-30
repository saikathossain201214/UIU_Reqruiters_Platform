<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FileUpload;

class FileUploadController extends Controller
{
    //
    public function index()
    {
        $uploads = FileUpload::all();
        $subjects = ['Software Engineering', 'Operating Systems', 'Software Architecture', 'Compiler'];
    
        return view('student_course_materials', compact('uploads', 'subjects'));
    }
    
    

    public function upload(Request $request)
    {
        // ... (same as before)
    
        $subjects = ['Software Engineering', 'Operating Systems', 'Software Architecture', 'Compiler'];
    
        $matchedSubject = null;
        foreach ($subjects as $subject) {
            if ($request->input('title') === $subject) {
                $matchedSubject = $subject;
                break;
            }
        }
    
        if ($matchedSubject) {
            $pdfPath = $request->file('pdf')->store('pdfs', 'public');
    
            FileUpload::create([
                'title' => $matchedSubject,
                'description' => $request->input('description'),
                'pdf_link' => $pdfPath,
            ]);
        } else {
            return redirect('/student_course_materials')->with('error', 'Course or subject not found.');
        }
    
        return redirect('/student_course_materials')->with('success', 'File uploaded successfully.');
    }
    

    public function viewCourse($subject)
    {
        $uploads = FileUpload::where('title', $subject)->get();
        return view('student_course_materials_view', compact('uploads'));
    }
}
