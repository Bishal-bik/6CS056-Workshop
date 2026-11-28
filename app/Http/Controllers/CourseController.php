<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        return view('course.list', [
            'courses' => $request->user()->role === 'admin'
                ? Course::latest()->get()
                : $request->user()->courses()->latest()->get(),
        ]);
    }

    public function create()
    {
        return view('course.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate($this->rules());
        $course = $request->user()->courses()->create($validated);

        return redirect()
            ->route('courses.index')
            ->with('success', "Course {$course->name} created successfully!");
    }

    public function show(Course $course)
    {
        Gate::authorize('manage-course', $course);

        return view('course.detail', ['course' => $course]);
    }

    public function edit(Course $course)
    {
        Gate::authorize('manage-course', $course);

        return view('course.edit', ['course' => $course]);
    }

    public function update(Request $request, Course $course)
    {
        Gate::authorize('manage-course', $course);

        $course->update($request->validate($this->rules()));

        return redirect()
            ->route('courses.show', $course)
            ->with('success', 'Course updated successfully!');
    }

    public function destroy(Course $course)
    {
        Gate::authorize('manage-course', $course);

        $course->delete();

        return redirect()
            ->route('courses.index')
            ->with('success', 'Course deleted successfully!');
    }

    private function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'duration' => 'required',
            'fee' => 'required|numeric|min:0',
            'difficulty' => 'required|in:Easy,Medium,Hard',
            'is_active' => 'required|boolean',
        ];
    }
}
