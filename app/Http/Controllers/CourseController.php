<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    // Display all courses
    public function index()
    {
        $courses = Course::all();

        return view('course.list', compact('courses'));
    }

    // Show create form
    public function create()
    {
        return view('course.create');
    }

    // Save new course
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'duration' => 'required',
            'fee' => 'required|numeric',
            'difficulty' => 'required|in:Easy,Medium,Hard',
            'is_active' => 'required|boolean',
        ]);

        Course::create($request->all());

        return redirect('/courses');
    }

    // Display course details
    public function show($id)
    {
        $course = Course::findOrFail($id);

        return view('course.detail', compact('course'));
    }

    // Show edit form
    public function edit($id)
    {
        $course = Course::findOrFail($id);

        return view('course.edit', compact('course'));
    }

    // Update course
    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'duration' => 'required',
            'fee' => 'required|numeric',
            'difficulty' => 'required|in:Easy,Medium,Hard',
            'is_active' => 'required|boolean',
        ]);

        $course->update($request->all());

        return redirect('/courses');
    }

    // Delete course
    public function destroy($id)
    {
        $course = Course::findOrFail($id);

        $course->delete();

        return redirect('/courses');
    }
}