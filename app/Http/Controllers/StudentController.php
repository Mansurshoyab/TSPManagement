<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Batch;
use App\Models\Category;
use App\Models\Course;
use App\Models\Payment;

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
        $payment = Payment::all();
        $batch = Batch::all();
        return view('pages.student.index')->with(['course' => $course, 'categories' => $category, 'student' => $student, 'payment' => $payment, 'batch'=> $batch]);
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
        $this->validate($request, [
            'course_id' => 'required',
            'batch_id' => 'required',
            'first_name' => 'required|string|max:40',
            'last_name' => 'required|string|max:40',
            'dob' => 'required|date',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:50',
            'gender' => 'required',
            'admission_date' => 'required|date',
            'status' => 'required',
            'category_id' => 'required',
        ]);

        Student::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     */
    // public function show(Student $student)
    // {   $student->load('course');
    //     $student->loadMissing('payments');
    //     //dd($student);
    //     return view('pages.student.show')->with(['student' => $student]);
    // }

    public function show(Student $student)
    {
        $student->load('course'); // Load the related course
        $student->loadMissing('payments');
    
        // Get the course_fee from the loaded course
        $courseFee = $student->course->course_fee;
    
        return view('pages.student.show')->with([
            'student' => $student,
            'courseFee' => $courseFee, // Pass the course_fee to the view
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $course = Course::all();
        $category = Category::all();
        $batch = Batch::all();
        return view('pages.student.edit')->with(['course' => $course, 'category' => $category, 'student' => $student, 'batch'=>$batch]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        // dd($request);
        $this->validate($request, [
            'course_id' => 'required',
            'batch_id' => 'required',
            'first_name' => 'required|string|max:40',
            'last_name' => 'required|string|max:40',
            'dob' => 'required|date',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:50',
            'gender' => 'required',
            'admission_date' => 'required|date',
            'status' => 'required',
            'category_id' => 'required|string|min:0',
        ]);

        $student->update(
            $request->all()
        );
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
