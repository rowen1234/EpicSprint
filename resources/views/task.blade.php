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

        <!-- Search and Filter Form -->
        <form method="GET" action="{{ route('task.index') }}" class="mb-3">
            <div class="row">
                <!-- Search by name -->
                <div class="col-md-4">
                    <input type="text" name="search" class="form-control" placeholder="Search by task name" value="{{ request()->search }}">
                </div>

                <!-- Filter by Project -->
                <div class="col-md-3">
                    <select name="project_id" class="form-control">
                        <option value="">All Projects</option>
                        @foreach($projects as $project)
                            <option value="{{ $project->id }}" {{ request()->project_id == $project->id ? 'selected' : '' }}>
                                {{ $project->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Filter by Status -->
                <div class="col-md-3">
                    <select name="status" class="form-control">
                        <option value="">All Statuses</option>
                        <option value="todo" {{ request()->status == 'todo' ? 'selected' : '' }}>To Do</option>
                        <option value="in progress" {{ request()->status == 'in progress' ? 'selected' : '' }}>In Progress</option>
                        <option value="ready" {{ request()->status == 'ready' ? 'selected' : '' }}>Ready</option>
                        <option value="done" {{ request()->status == 'done' ? 'selected' : '' }}>Done</option>
                    </select>
                </div>

                <!-- Submit Button -->
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>
            </div>
        </form>

        <!-- Create Button boven de tabel -->
        <a href="{{ route('task.create') }}" class="btn btn-primary mb-3">Create New Task</a>

        <!-- Table with issues displayed -->
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Project</th>
                    <th>Status</th>
                    <th>Deadline</th>
                    <th style="text-align: center;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->name }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->project ? $task->project->name : 'No Project' }}</td>
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->deadline }}</td>
                    <td style="display: flex; justify-content: space-evenly;">
                        <a href="{{ route('task.edit', $task->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('task.destroy', $task->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">No tasks found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Pagination links -->
        {{ $tasks->links() }}
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
