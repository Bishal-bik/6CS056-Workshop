<x-layouts.app title="Add Student">

    <div class="card">
        <h2>Add New Student</h2>

        <x-students.form
            :action="route('students.store')"
            buttonText="Create Student"
        />

        <br>
        <a href="{{ route('students.index') }}">Back to Students</a>
    </div>

</x-layouts.app>