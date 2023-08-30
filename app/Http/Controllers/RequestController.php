<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Models\RequestForm;


class RequestController extends Controller
{
    //
    public function teacherRequestForm()
{
    return view('teacher_request');
}

public function storeTeacherRequest(Request $request)
{
    // Define your validation rules
    $rules = [
        'teacher_name' => 'required|string',
        'teacher_id' => 'required|string',
        'course_name' => 'required|string',
        'course_id' => 'required|string',
        'section' => 'required|string',
        'credit' => 'required|in:1,3', // Ensure credit is 1 or 3
    ];

    // Create a validator instance
    $validator = Validator::make($request->all(), $rules);

    // Check if validation fails
    if ($validator->fails()) {
        return redirect('/teacher_request')
            ->withErrors($validator)
            ->withInput();
    }

    // Validation passed, create a new request record
    RequestForm::create([
        'teacher_name' => $request->input('teacher_name'),
        'teacher_id' => $request->input('teacher_id'),
        'course_name' => $request->input('course_name'),
        'course_id' => $request->input('course_id'),
        'section' => $request->input('section'),
        'credit' => $request->input('credit'),
    ]);

    return redirect('/teacher_request')->with('success', 'Request submitted successfully!');
}


public function adminRequestTeacher()
{
    $requests = RequestForm::all();
    return view('admin_dashboard', compact('requests'));
}

public function acceptRequest($id)
{
    $request = RequestForm::findOrFail($id);
    // Handle accepting the request here, e.g., update the status.
    return redirect('/admin_dashboard')->with('success', 'Request accepted!');
}
}
