<x-layouts.app title="Course Details">

    <div class="card">
        <h2>Course Details</h2>

        <p><strong>ID:</strong> {{ $course->id }}</p>
        <p><strong>Name:</strong> {{ $course->name }}</p>
        <p><strong>Description:</strong> {{ $course->description ?? 'N/A' }}</p>
        <p><strong>Duration:</strong> {{ $course->duration }}</p>
        <p><strong>Fee:</strong> {{ $course->fee }}</p>
        <p><strong>Difficulty:</strong> {{ $course->difficulty }}</p>
        <p><strong>Status:</strong> {{ $course->is_active ? 'Active' : 'Inactive' }}</p>

        <a href="{{ route('courses.edit', $course) }}" class="btn">Edit Course</a>

        <a href="{{ route('courses.index') }}" class="btn">Back to Courses</a>
    </div>

</x-layouts.app>