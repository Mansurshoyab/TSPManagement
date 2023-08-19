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
        // dd($course);
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
        // dd($request);
        Student::create($request->all());
        return back();
    }

    // public function store(StoreStudentRequest $request)
    // {
    //     $data = $request->all();

    //     // Set the category_id based on the selected value from the form
    //     $data['category_id'] = $request->input('category_id');

    //     Student::create($data);
    // }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
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
