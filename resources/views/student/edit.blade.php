<x-layouts.app title="Edit Student">

    <div class="card">
        <h2>Edit Student</h2>

        <x-students.form
            :student="$student"
            :action="route('students.update', $student)"
            method="PUT"
            buttonText="Update Student"
        />

        <br>
        <a href="{{ route('students.index') }}">Back to Students</a>
    </div>

</x-layouts.app>