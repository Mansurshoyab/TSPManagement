<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use App\Models\Trainer;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // public function dashboard(){
    //     return view('dashboard');
    // }

    public function index()
    {
        $students = Student::count();
        $trainer = Trainer::count();
        $course = Course::count();

        return view('dashboard2')->with(['students' => $students, 'trainer' => $trainer, 'course' => $course]);
    }
}
