<?php

namespace App\Http\Controllers;

use App\Models\Student;

class HomeController extends Controller
{
    public function index()
    {
        $totalStudents = Student::count();

        $computerScience = Student::where('course', 'COMPUTER SCIENCE')->count();

        $softwareEngineering = Student::where('course', 'software engineering')->count();

        $informationTechnology = Student::where('course', 'INFORMATION TECHNOLOGY')->count();

        $recentStudents = Student::latest()->take(5)->get();

        return view('dashboard', compact(
            'totalStudents',
            'computerScience',
            'softwareEngineering',
            'informationTechnology',
            'recentStudents'
        ));
    }
}