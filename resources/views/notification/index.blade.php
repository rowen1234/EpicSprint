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
            <table class="table-primary">
                <thead>
                    <tr>
                        <th>Project Id</th>
                        <th>Issue No.</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($notifications as $notification)
                        <tr>
                            <td>{{ $notification->project_id }}</td>
                            <td>{{ $notification->issue_id }}</td>
                            <td>{{ $notification->status }}</td>
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
