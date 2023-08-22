<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Fees;
use App\Models\Student;
use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::count();
        $trainer = Trainer::count();
        $course = Course::count();
        // $fees = Fees::table('fees')->sum('amount');
        $fees = DB::table('fees')->sum('amount');

        return view('dashboard2')->with(['students' => $students, 'trainer' => $trainer, 'course' => $course,'fees'=>$fees]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
