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
        $fee = Fees::all();
        return view('pages.fees.index')->with(['student'=> $student, 'course'=> $course , 'fees'=> $fee]);
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
        $this->validate($request,[
            'student_id' => 'required|string|max:12',
            'course_id' => 'required|string|max:12',
            'transaction_id' => 'required|string|max:20',
            'transaction_date' => 'required|date',
            'amount' => 'required|integer',
            'payment_method' => 'required|string|max:20',
            'receipt_number' => 'required|string|max:50',
        ]);
        
        Fees::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Fees $fee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fees $fee)
    {
        // dd($fee);
        $course = Course::all();
        $student = Student::all();
        return view('pages.fees.edit')->with(['course'=> $course, 'student'=>$student, 'fees'=>$fee]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFeesRequest $request, Fees $fee)
    {
        $this->validate($request,[
            'student_id' => 'required|string|max:12',
            'course_id' => 'required|string|max:12',
            'transaction_id' => 'required|string|max:20',
            'transaction_date' => 'required|date',
            'amount' => 'required|integer',
            'payment_method' => 'required|string|max:20',
            'receipt_number' => 'required|string|max:50',
        ]);
        
        $fee->update([
            'student_id'=> $request->input('student_id'),
            'course_id' => $request->input('course_id'),
            'transaction_id' => $request->input('transaction_id'),
            'transaction_date' => $request->input('transaction_date'),
            'amount' => $request->input('amount'),
            'payment_method' => $request->input('payment_method'),
            'receipt_number' => $request->input('receipt_number'),
        ]);
        return redirect()->route('fees.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fees $fee)
    {
        
        $fee->delete();
        return redirect()->route('fees.index');
    }
}
