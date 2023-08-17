<?php

namespace App\Http\Controllers;

use App\Models\Course;
// use App\Http\Requests\StoreCourseRequest;
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
        // return view('pages.course.index', compact('courses', 'categories', 'trainers'));
        return view('pages.course.index')->with(['categories'=>$categories,'trainers'=>$trainers, 'courses'=>$courses]);
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
        // dd($request);
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
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        // dd($categories);
    //     return view('pages.course.edit',[
    //     'course' => $course,
    //     'courses' => Course::all()
        
    // ]);
    $courses = Course::all();
    $categories = Category::all();
    $trainers = Trainer::all();
    return view('pages.course.edit')->with(['categories'=>$categories, 'trainers'=>$trainers , 'course'=>$course]);
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {

        // dd($request->all()); 
        dd($course); 

        // $course->update([
        //     'first_name' => $request->input('first_name'),
        //     'last_name' => $request->input('last_name'),
        //     'dob' => $request->input('dob'),
        //     'email' => $request->input('email'),
        //     'phone' => $request->input('phone'),
        //     'address' => $request->input('address'),
        //     'specialization' => $request->input('specialization'),
        //     'experience' => $request->input('experience'),
        //     'status' => $request->input('status'),
        // ]);

        return redirect()->route('course.index');

        // return redirect()->route('pages.course.index');
    
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
