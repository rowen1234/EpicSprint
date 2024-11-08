<?php

namespace App\Http\Controllers;

use App\Models\notification;
use App\Models\task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notifications = Notification::where('user_id', Auth::user()->get()->value('id'))->get();

        return view('notification.index', compact('notifications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(task $task)
    {
        $notification = new notification;

        $notification->task_id -> $task->value('id');
        $notification->project_id -> $task->project_id;
        $notification->task_status -> $task->status;
        $notification->user_id -> task->user_id;

        $deadline = new \DateTime();
        $deadline->modify('+2 weeks');
        $notification->deadline = $deadline->format('Y-m-d');

        $notification->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(notification $notification)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(notification $notification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, notification $notification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(notification $notification)
    {
        $notification->delete();

        return redirect()->route('notifications.index');
    }
}
