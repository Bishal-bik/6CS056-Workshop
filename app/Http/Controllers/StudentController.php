<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // Display all students
    public function index()
    {
        $students = Student::all();

        return view('student.list', compact('students'));
    }

    // Show create form
    public function create()
    {
        return view('student.create');
    }

    // Save new student
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students',
            'phone' => 'required',
            'address' => 'nullable',
            'date_of_birth' => 'nullable|date',
        ]);

        Student::create($request->all());

        return redirect('/students');
    }

    // Display student details
    public function show($id)
    {
        $student = Student::findOrFail($id);

        return view('student.detail', compact('student'));
    }

    // Show edit form
    public function edit($id)
    {
        $student = Student::findOrFail($id);

        return view('student.edit', compact('student'));
    }

    // Update student
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students,email,' . $id,
            'phone' => 'required',
            'address' => 'nullable',
            'date_of_birth' => 'nullable|date',
        ]);

        $student->update($request->all());

        return redirect('/students');
    }

    //Delete student
    public function destroy($id)
    {
        $student = Student::findOrFail($id);

        $student->delete();

        return redirect('/students');
    }
}