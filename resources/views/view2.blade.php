<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course View Page - CRUD Operations</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <h1>COURSE OPERATION</h1>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Duration(Months)</th>
                    <th>Creation</th>
                    <th>Updation</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course->id }}</td>
                        <td>{{ $course->title }}</td>
                        <td>{{ $course->duration }}</td>
                        <td>{{ $course->created_at }}</td>
                        <td>{{ $course->updated_at }}</td>
                        <td>
                            <!-- Edit Course -->
                            <form action="/courses/{{ $course->id }}/edit" method="GET">
                                <button type="submit" class="btn btn-primary btn-block">Edit</button>
                            </form>
                            <!-- Delete Course -->
                            <form action="/courses/{{ $course->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-block">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <h2>Add a Course</h2>
        <form action="/courses/new" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Course Name:</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="duration">Duration (Months):</label>
                <input type="text" class="form-control" id="duration" name="duration">
            </div>
            <button type="submit" class="btn btn-primary">Add Course</button>
        </form>
    </div>
</body>
</html>
