@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar proyecto</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('project.update', $project->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $project->name }}" autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description" value="{{ $project->description }}">

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('alias') ? ' has-error' : '' }}">
                            <label for="alias" class="col-md-4 control-label">Alias</label>

                            <div class="col-md-6">
                                <input id="alias" type="text" class="form-control" name="alias" value="{{ $project->alias }}">

                                @if ($errors->has('alias'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alias') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('initial_date') ? ' has-error' : '' }}">
                            <label for="initial_date" class="col-md-4 control-label">Initial date</label>

                            <div class="col-md-6">
                                <input id="initial_date" type="date" class="form-control" name="initial_date" value="{{ $project->initial_date }}" >

                                @if ($errors->has('initial_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('initial_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('final_date') ? ' has-error' : '' }}">
                            <label for="final_date" class="col-md-4 control-label">Final date</label>

                            <div class="col-md-6">
                                <input id="final_date" type="date" class="form-control" name="final_date" value="{{ $project->final_date }}">

                                @if ($errors->has('final_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('final_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update Project
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
