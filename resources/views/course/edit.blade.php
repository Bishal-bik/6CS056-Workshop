<x-layouts.app title="Edit Course">

    <div class="card">
        <h2>Edit Course</h2>

        <form action="{{ route('courses.update', $course) }}" method="POST">
            @csrf
            @method('PUT')

            <x-form-input
                name="name"
                label="Course Name"
                :value="$course->name"
                required
            />

            <x-form-textarea
                name="description"
                label="Description"
                :value="$course->description"
            />

            <x-form-input
                name="duration"
                label="Duration"
                :value="$course->duration"
                required
            />

            <x-form-input
                name="fee"
                label="Fee"
                type="number"
                step="0.01"
                :value="$course->fee"
                required
            />

            <div class="form-group">
                <label for="difficulty">Difficulty</label>
                <select name="difficulty" id="difficulty" class="form-control" required>
                    @foreach (['Easy', 'Medium', 'Hard'] as $level)
                        <option value="{{ $level }}" @selected($course->difficulty === $level)>
                            {{ $level }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="is_active">Status</label>
                <select name="is_active" id="is_active" class="form-control" required>
                    <option value="1" @selected($course->is_active)>Active</option>
                    <option value="0" @selected(!$course->is_active)>Inactive</option>
                </select>
            </div>

            <button type="submit" class="btn">Update Course</button>
        </form>

        <br>
        <a href="{{ route('courses.index') }}">Back to Courses</a>
    </div>

</x-layouts.app>