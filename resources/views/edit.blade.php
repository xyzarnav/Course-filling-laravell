<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Course</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Edit Course</h1>
        <form action="/courses/{{ $course->id }}" method="POST" class="bg-light p-5 rounded">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title" class="form-label">Course Name:</label>
                <input type="text" id="title" name="title" value="{{ $course->title }}" class="form-control" required>
            </div>
            <div class="form-group mt-3">
                <label for="duration" class="form-label">Duration:</label>
                <input type="text" id="duration" name="duration" value="{{ $course->duration }}" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Update Course</button>
        </form>
    </div>
</body>
</html>
