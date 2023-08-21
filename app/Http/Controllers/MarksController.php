<?php

namespace App\Http\Controllers;

use App\Models\Marks;
use App\Http\Requests\StoreMarksRequest;
use App\Http\Requests\UpdateMarksRequest;
use App\Models\Course;
use App\Models\Modiul;
use App\Models\Student;

class MarksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = Student::all();
        $course = Course::all();
        $modiul = Modiul::all();
        $marks = Marks::all();
        return view('pages.marks.index')->with(['student' => $student, 'course' => $course, 'modiul'=> $modiul, 'marks'=> $marks]);
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
    public function store(StoreMarksRequest $request)
    {
        $this->validate($request,[
            'student_id' => 'required',
            'course_id' => 'required',
            'modiul_id' => 'required',
            'marks' => 'required|integer',
        ]);
        Marks::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Marks $marks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Marks $mark)
    {
        // dd($mark);
        $student = Student::all();
        $course = Course::all();
        $modiul = Modiul::all();
        return view('pages.marks.edit')->with(['student'=>$student, 'course'=>$course, 'modiul'=>$modiul, 'marks'=>$mark]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMarksRequest $request, Marks $mark)
    {
        $this->validate($request,[
            'student_id' => 'required',
            'course_id' => 'required',
            'modiul_id' => 'required',
            'marks' => 'required|integer',
        ]);
        
        $mark->update([
            'student_id' => $request->input('student_id'),
            'course_id' => $request->input('course_id'),
            'modiul_id' => $request->input('modiul_id'),
            'marks' => $request->input('marks'),
        ]);
        return redirect()->route('marks.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Marks $mark)
    {
        
        $mark->delete();
        return redirect()->route('marks.index');
    }
}
