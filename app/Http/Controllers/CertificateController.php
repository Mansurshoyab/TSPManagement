<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Http\Requests\StoreCertificateRequest;
use App\Http\Requests\UpdateCertificateRequest;
use App\Models\Category;
use App\Models\Course;
use App\Models\Student;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course = Course::all();
        // dd($course);
        $student = Student::all();
        // dd($student);
        $category = Category::all();
        $certificate = Certificate::all();
        return view('pages.certificate.index')->with(['courses' => $course, 'student' => $student, 'certificate' => $certificate, 'category'=>$category]);
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
    public function store(StoreCertificateRequest $request)
    {
        // dd($request);
        Certificate::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Certificate $certificate)
    {
        $certificate->load('course');
        $certificate->load('category');
        $certificate->load('student');
        // dd($certificate);
        return view('pages.certificate.show')->with(['certificate' => $certificate]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Certificate $certificate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCertificateRequest $request, Certificate $certificate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Certificate $certificate)
    {
        //
    }
}
