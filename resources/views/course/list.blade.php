<x-layouts.app title="Course List">

    <div class="card">
        <h1>Course Management System</h1>
        <h2>Course List</h2>

        <a href="{{ route('courses.create') }}" class="btn">
            Add New Course
        </a>
    </div>

    <div class="card">
        <table width="100%" cellpadding="10">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Duration</th>
                    <th>Fee</th>
                    <th>Difficulty</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($courses as $course)
                    <tr>
                        <td>{{ $course->id }}</td>
                        <td>{{ $course->name }}</td>
                        <td>{{ $course->description }}</td>
                        <td>{{ $course->duration }}</td>
                        <td>{{ $course->fee }}</td>
                        <td>{{ $course->difficulty }}</td>
                        <td>{{ $course->is_active ? 'Active' : 'Inactive' }}</td>

                        <td>
                            <a href="{{ route('courses.show', $course) }}">View</a> |
                            <a href="{{ route('courses.edit', $course) }}">Edit</a>

                            <x-delete-form
                                :action="route('courses.destroy', $course)"
                            />
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8">No courses found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</x-layouts.app>