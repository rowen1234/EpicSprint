@extends('layouts.app')

@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Nieuw project</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('projects.index') }}" enctype="multipart/form-data">
                        Terug</a>
                </div>
            </div>
        </div>

        <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Naam:</strong>
                        <input type="text" name="name" class="form-control" placeholder="project naam">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Beschrijving:</strong>
                        <input type="text" name="description" class="form-control" placeholder="beschrijving">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>DeadLine:</strong>
                        <input type="date" name="deadline" class="form-control">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
@endsection
