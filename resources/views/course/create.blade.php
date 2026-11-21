<x-layouts.app title="Add Course">

    <div class="card">
        <h2>Add New Course</h2>

        <form action="{{ route('courses.store') }}" method="POST">
            @csrf

            <x-form-input name="name" label="Course Name" required />

            <x-form-textarea name="description" label="Description" />

            <x-form-input name="duration" label="Duration" required />

            <x-form-input name="fee" label="Fee" type="number" step="0.01" required />

            <div class="form-group">
                <label for="difficulty">Difficulty</label>
                <select name="difficulty" id="difficulty" class="form-control" required>
                    <option value="">Select Difficulty</option>
                    <option value="Easy">Easy</option>
                    <option value="Medium">Medium</option>
                    <option value="Hard">Hard</option>
                </select>
            </div>

            <div class="form-group">
                <label for="is_active">Status</label>
                <select name="is_active" id="is_active" class="form-control" required>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>

            <button type="submit" class="btn">Create Course</button>
        </form>

        <br>
        <a href="{{ route('courses.index') }}">Back to Courses</a>
    </div>

</x-layouts.app>