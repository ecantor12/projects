@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>{{ $project->name }}</h1>
                </div>

                <div class="panel-body">
                    <strong>Description:</strong>
                    <p>{{ $project->description }}</p>
                    <strong>Initial date:</strong>
                    <p>{{ $project->initial_date }}</p>
                    <strong>Final date:</strong>
                    <p>{{ $project->final_date }}</p>
                </div>
                <div class="panel-footer clearfix">
                    <p class="pull-right">
                        <a href="{{ route('project.edit', $project->id) }}">Editar</a>
                        <a href="#">Comment</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
