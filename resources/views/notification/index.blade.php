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
    <div  class="row">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Issue No.</th>
                    <th>Status</th>
                    <th>Project Id</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($Notifications as $Notification)
                <tr>
                    <td>{{ $Notification->movie }}</td>
                    <td>{{ $Notification->content }}</td>
                    <td>{{ $Notification->content }}</td>
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
