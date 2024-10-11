<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Issue overzicht Epic-Sprint</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS voor mooie tabelstijlen -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Issue overzicht</h1>

        <!-- Create Button boven de tabel -->
        <a href="{{ route('task.create') }}" class="btn btn-primary mb-3">Create New Task</a>

        <!-- Table with issues displayed -->
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Project</th> <!-- Display project name -->
                    <th>Status</th>
                    <th>Deadline</th>
                    <!-- <th>Created At</th> -->
                    <!-- <th>Updated At</th> -->
                    <th style="text-align: center;">Actions</th> <!-- Edit and Delete buttons -->
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->name }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->project ? $task->project->name : 'No Project' }}</td> <!-- Project name -->
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->deadline }}</td>
                    <!-- <td>{{ $task->created_at }}</td> -->
                    <!-- <td>{{ $task->updated_at }}</td> -->
                    <!-- Actions delete and update button -->
                    <td style="display: flex; justify-content: space-evenly;">
                        <a href="{{ route('task.edit', $task->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('task.destroy', $task->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS voor eventuele functionaliteiten -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
