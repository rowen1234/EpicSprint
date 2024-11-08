@extends('layouts.app')

@section('content')
    <div class="container mt-2">
        <div>
            <div>
                <div>
                    <h1 class="card-title">project</h1>
                </div>
            </div>
        </div>
        <div>
            <div>

                <button type="submit" class="btn btn-succes"><a href="{{ route('projects.create') }}">Maak Nieuw
                    Project</a></button>
            </div>
            <table class="table">
                <thead class="table-primary">
                    <tr>
                        <th>Naam</th>
                        <th>Task No.</th>
                        <th>Gemaakt op</th>
                        <th>Deadline</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td>{{ $project->name }}</td>
                            <td>{{ $project->description }}</td>
                            <td>{{ $project->created_at }}</td>
                            <td>{{ $project->deadline }}</td>
                            <td>
                                <form action="{{ route('projects.destroy', $project->id) }}" method="Post">
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
