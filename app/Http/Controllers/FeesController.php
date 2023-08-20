<?php

namespace App\Http\Controllers;

use App\Models\Fees;
use App\Http\Requests\StoreFeesRequest;
use App\Http\Requests\UpdateFeesRequest;
use App\Models\Course;
use App\Models\Student;

class FeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = Student::all();
        $course = Course::all();
        $fees = Fees::all();
        return view('pages.fees.index')->with(['student'=> $student, 'course'=> $course , 'fees'=> $fees]);
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
    public function store(StoreFeesRequest $request)
    {
        Fees::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Fees $fees)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fees $fees)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFeesRequest $request, Fees $fees)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fees $fees)
    {
        dd($fees);
        $fees->delete();
        return redirect()->route('fees.index');
    }
}
