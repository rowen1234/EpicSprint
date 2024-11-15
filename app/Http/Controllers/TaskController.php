<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Fetch the list of all projects for the filter dropdown
        $projects = \App\Models\Project::all();

        // Query the tasks
        $query = task::query();

        // Apply search filter (by name)
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // Apply project filter
        if ($request->filled('project_id')) {
            $query->where('project_id', $request->project_id);
        }

        // Apply status filter
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Apply priority filter
        if ($request->filled('priority')) {
            $query->where('priority', $request->priority);
        }

        // Get the filtered tasks with pagination
        $tasks = $query->with('project')->paginate(10);

        // Return the view with tasks and projects
        return view('task/task', compact('tasks', 'projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Fetch all projects to display in the select dropdown
        $projects = \App\Models\Project::all();

        // Return the create task view with the list of projects
        return view('task/create_task', compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'project_id' => 'required|exists:projects,id',
            'status' => 'required|in:done,ready,in progress,todo',
            'priority' => 'required|in:low,medium,high',
            'deadline' => 'required|date',
        ]);

        $task = new Task;
        $task->name = $request->name;
        $task->description = $request->description;
        $task->project_id = $request->project_id;
        $task->status = $request->status;
        $task->deadline = $request->deadline;
        $task->user_id = Auth::user()->get()->value('id');
        $task->save();
        // Create a new task
        //Task::create($validated);


        // Redirect back to the tasks list
        return redirect()->route('notifications.store', $task)->with('success', 'Task created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        // Fetch all projects to display in the select dropdown
        $projects = \App\Models\Project::all();

        // Return the edit task view with the task and the list of projects
        return view('task/edit_task', compact('task', 'projects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'project_id' => 'required|exists:projects,id', // Ensure the project_id exists in the projects table
            'status' => 'required|in:done,ready,in progress,todo',
            'priority' => 'required|in:low,medium,high',
            'deadline' => 'required|date',
        ]);

        // Update the task with validated data
        $task->update($validated);


        // Redirect back to the tasks list
        return redirect()->route('notifications.store', $task)->with('success', 'Task updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        // Delete the task
        $task->delete();

        // Redirect back to the tasks list with a success message
        return redirect()->route('task.index')->with('success', 'Task deleted successfully!');
    }
}
