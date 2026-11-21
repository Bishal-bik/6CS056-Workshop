<x-layouts.app title="Student Details">

    <div class="card">
        <h2>Student Details</h2>

        <p><strong>ID:</strong> {{ $student->id }}</p>
        <p><strong>Name:</strong> {{ $student->name }}</p>
        <p><strong>Email:</strong> {{ $student->email }}</p>
        <p><strong>Phone:</strong> {{ $student->phone }}</p>
        <p><strong>Address:</strong> {{ $student->address ?? 'N/A' }}</p>
        <p><strong>Date of Birth:</strong> {{ $student->date_of_birth?->format('Y-m-d') ?? 'N/A' }}</p>
        <p><strong>Age:</strong> {{ $student->age ?? 'N/A' }}</p>

        <a href="{{ route('students.edit', $student) }}" class="btn">Edit Student</a>

        <a href="{{ route('students.index') }}" class="btn">Back to Students</a>
    </div>

</x-layouts.app>