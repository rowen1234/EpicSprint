@extends('layouts.app')

@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Notificaties</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Project Id</th>
                        <th>Issue No.</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Notifications as $Notification)
                        <tr>
                            <td>{{ $Notification->project_id }}</td>
                            <td>{{ $Notification->issue_id }}</td>
                            <td>{{ $Notification->status }}</td>
                            <td>
                                <form action="{{ route('notifications.destroy', $Notification->id) }}" method="Post">
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
