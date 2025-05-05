<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Task</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <div class="container mt-5">
        <h1>Create a New Task</h1>

        <!-- Form to create a new task -->
        <form action="{{ route('task.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Task Name -->
            <div class="form-group">
                <label for="name">Task Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <!-- Task Description -->
            <div class="form-group">
                <label for="description">Task Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>

            <!-- Project ID -->
            <div class="form-group">
                <label for="project_id">Project</label>
                <select class="form-control" id="project_id" name="project_id" required>
                    @foreach($projects as $project)
                        <option value="{{ $project->id }}">{{ $project->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Status -->
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="todo">To Do</option>
                    <option value="in progress">In Progress</option>
                    <option value="ready">Ready</option>
                    <option value="done">Done</option>
                </select>
            </div>

            <!-- Deadline -->
            <div class="form-group">
                <label for="deadline">Deadline</label>
                <input type="date" class="form-control" id="deadline" name="deadline" required>
            </div>

            <div class="form-group">
                <Label for="task_image">task image</Label>
                <input type="file" name="task_image" class="form-control">
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary">Create Task</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
