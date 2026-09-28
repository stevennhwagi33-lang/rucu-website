<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(Request $request)
{
    $search = $request->search;
    $course = $request->course;

    $students = Student::query();

    // Search by name, registration number or email
    if ($search) {
        $students->where(function ($query) use ($search) {
            $query->where('full_name', 'like', '%' . $search . '%')
                  ->orWhere('registration_number', 'like', '%' . $search . '%')
                  ->orWhere('email', 'like', '%' . $search . '%');
        });
    }

    // Filter by course
    if ($course) {
        $students->where('course', $course);
    }

    $students = $students->paginate(10);

    return view('students.index', compact(
        'students',
        'search',
        'course'
    ));
}
public function edit($id)
{
    $student = Student::findOrFail($id);

    return view('students.edit', compact('student'));
}
public function update(Request $request, $id)
{
    $student = Student::findOrFail($id);

    $validated = $request->validate([
        'full_name' => 'required|string|max:100',
        'registration_number' => 'required|string|max:20|unique:students,registration_number,' . $id,
        'email' => 'required|email|max:100|unique:students,email,' . $id,
        'phone' => 'required|string|digits:10',
        'course' => 'required|string|max:50',
    ]);

    $student->update($validated);

    return redirect('/students')->with('success', 'Student updated successfully!');
}
public function destroy($id)
{
    $student = Student::findOrFail($id);

    $student->delete();

    return redirect('/students')->with('success', 'Student deleted successfully!');
}
    
    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'full_name' => 'required|string|max:100',
        'registration_number' => 'required|string|max:20|unique:students,registration_number',
        'email' => 'required|email|max:100|unique:students,email',
        'phone' => 'required|string|digits:10',
        'course' => 'required|string|max:50',
    ]);

    Student::create($validated);

    return redirect('/students')->with('success', 'Student added successfully!');
}
}