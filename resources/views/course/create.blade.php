<!DOCTYPE html>
<html>
<head>
    <title>Add Course</title>
</head>
<body>

    <h1>Add New Course</h1>

    @if($errors->any())
        <div>
            <h3>Please fix the following errors:</h3>

            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/courses" method="POST">
        @csrf

        <label>Course Name:</label>
        <input type="text" name="name" required>
        <br><br>

        <label>Description:</label>
        <textarea name="description"></textarea>
        <br><br>

        <label>Duration:</label>
        <input type="text" name="duration" placeholder="e.g. 3 Months" required>
        <br><br>

        <label>Fee:</label>
        <input type="number" name="fee" step="0.01" required>
        <br><br>

        <label>Difficulty:</label>
        <select name="difficulty" required>
            <option value="Easy">Easy</option>
            <option value="Medium">Medium</option>
            <option value="Hard">Hard</option>
        </select>
        <br><br>

        <label>Status:</label>
        <select name="is_active" required>
            <option value="1">Active</option>
            <option value="0">Inactive</option>
        </select>
        <br><br>

        <button type="submit">Save Course</button>
    </form>

    <br>
    <a href="/courses">Back to Course List</a>

</body>
</html>