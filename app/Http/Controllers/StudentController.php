<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Category;
use App\Models\Course;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course = Course::get();
        $student = Student::get();
        $category = Category::get();
        return view('pages.student.index')->with(['course'=>$course, 'categories'=> $category, 'student'=>$student]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        $this->validate($request,[
            'course_id' => 'required|string|max:12',
            'first_name' => 'required|string|max:12',
            'last_name' => 'required|string|max:12',
            'dob' => 'required|date',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:50',
            'gender' => 'required',
            'admission_date' => 'required|date',
            'status' => 'required',
            'major' => 'required|string|min:0',
        ]);

        Student::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        $course = Course::all();
        $category = Category::all();
        return view('pages.student.show')->with(['course' => $course, 'category' => $category , 'student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $course = Course::all();
        $category = Category::all();
        return view('pages.student.edit')->with(['course' => $course, 'category' => $category , 'student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        $this->validate($request,[
            'course_id' => 'required|string|max:12',
            'first_name' => 'required|string|max:12',
            'last_name' => 'required|string|max:12',
            'dob' => 'required|date',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:50',
            'gender' => 'required',
            'admission_date' => 'required|date',
            'status' => 'required',
            'major' => 'required|string|min:0',
        ]);
        
        $student->update([
            'course_id' => $request->input('course_id'),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'dob' => $request->input('dob'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'gender' =>$request->input('gender'),
            'address' => $request->input('address'),
            'admission_date' => $request->input('admission_date'),
            'major' =>$request->input('major'),
        ]);
        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('student.index');
    }
}
