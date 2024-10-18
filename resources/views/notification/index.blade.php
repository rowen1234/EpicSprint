@extends('layouts.app')

@section('content')
    <div class="container mt-2">
        <div>
            <div>
                <div>
                    <h1 class="card-title">Notificaties</h1>
                </div>
            </div>
        </div>
        <div>
            <table class="table">
                <thead class="table-primary">
                    <tr>
                        <th>Project Id</th>
                        <th>Task No.</th>
                        <th>Status</th>
                        <th>Gemaakt op</th>
                        <th>Deadline</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($notifications as $notification)
                        <tr>
                            <td>{{ $notification->project_id }}</td>
                            <td>{{ $notification->issue_id }}</td>
                            <td>{{ $notification->status }}</td>
                            <td>{{ $notification->created_at }}</td>
                            <td>{{ $notification->deadline }}</td>
                            @if (($notification->deadline <= date('Y-m-d')) && ($notification->status <> 'done'))
                                <td>
                                    <p>Deadline is verstreken!</p>
                                </td>
                            @endif
                            <td>
                                <form action="{{ route('notifications.destroy', $notification->id) }}" method="Post">
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
    </div>
@endsection
