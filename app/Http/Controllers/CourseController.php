<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Category;
use App\Models\Trainer;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /*
     * Display a listing of the resource.
     */

    public function index()
    {
        $courses = Course::all();
        $categories = Category::all();
        $trainers = Trainer::all();
        return view('pages.course.index')->with(['categories' => $categories, 'trainers' => $trainers, 'courses' => $courses]);
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

    public function store(Request $request)
    {
        $this->validate($request,[
            'course_name' => 'required|string|max:12',
            'category_id' => 'required|string|max:12',
            'trainer_id' => 'required',
            'description' => 'required|string|max:255',
            'course_duretion' => 'required|string|max:20',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'course_fee' => 'required|max:25',
            'location' => 'required|string|max:100',
        ]);

        Course::create($request->all());
        return back();
    }

    // public function store(StoreCourseRequest $request)
    // {
    //     return "This is data";
    // }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for  editing the specified resource.
     */
    public function edit(Course $course)
    {

        $courses = Course::all();
        $categories = Category::all();
        $trainers = Trainer::all();
        return view('pages.course.edit')->with(['categories' => $categories, 'trainers' => $trainers, 'course' => $course]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        $this->validate($request,[
            'course_name' => 'required|string|max:12',
            'category_id' => 'required|string|max:12',
            'trainer_id' => 'required',
            'description' => 'required|string|max:255',
            'course_duretion' => 'required|string|max:20',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'course_fee' => 'required|max:25',
            'location' => 'required|string|max:100',
        ]);

        $course->update([
            'course_name' => $request->input('course_name'),
            'category_id' => $request->input('category_id'),
            'description' => $request->input('description'),
            'trainer_id' => $request->input('trainer_id'),
            'course_duretion' => $request->input('course_duretion'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'course_fee' => $request->input('course_fee'),
            'location' => $request->input('location'),
        ]);

        return redirect()->route('course.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('course.index');
    }
}
