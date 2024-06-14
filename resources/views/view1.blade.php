<!DOCTYPE html>
<html>
    <head>
        <title>Admin Page</title>
        <!-- Add Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1 class="align-center"> USER TABLE</h1>
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <!-- Add more columns as needed -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <!-- Add more fields as needed -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <a href="{{ route('course.view') }}" class="btn btn-primary">Go to Course Operation</a>
        </div>
    </body>
</html>
