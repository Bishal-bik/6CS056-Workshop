<x-layouts.app title="Student List">

    <div class="card">
        <h1>Student Management System</h1>
        <h2>Student List</h2>

        <a href="{{ route('students.create') }}" class="btn">
            Add New Student
        </a>
    </div>

    <div class="card">
        <table width="100%" cellpadding="10">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Date of Birth</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->phone }}</td>
                        <td>{{ $student->address }}</td>
                        <td>{{ $student->date_of_birth?->format('Y-m-d') }}</td>

                        <td>
                            <a href="{{ route('students.show', $student) }}">View</a> |
                            <a href="{{ route('students.edit', $student) }}">Edit</a>

                            <x-delete-form
                                :action="route('students.destroy', $student)"
                            />
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7">No students found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</x-layouts.app>