@extends('layouts.app')

@section('content')
<div class="container">
    <div class="title m-b-md">
        Projects List
    </div>
    <div class="links">
        <a href="{{ route('project.create') }}">Create</a>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <table style="width:100%">
                <tr>
                    <th>Name</th>
                    <!--<th>Description</th>-->
                    <th>Initial date</th>
                    <th>Final date</th>
                    <th></th>
                    <!--<th></th>-->
                </tr>
                @foreach($projects as $project)
                <tr>
                    <td width="">{{ $project->name }}</td>
                    <!--<td width="50%">{{ $project->description }}</td>-->
                    <td width="">{{ $project->initial_date }}</td>
                    <td width="">{{ $project->final_date }}</td>
                    <td class="" width="">
                        <a href="{{ route('project.show', $project->id) }}">Show</a> 
                        <a href="{{ route('project.edit', $project->id) }}">Edit</a> 
                        <a href="{{ route('project.destroy', $project->id) }}">Deleted</a></td>
                    <!--<td class="links" width="5%"><a href="#">Deleted</a></td>-->
                </tr>
                @endforeach
            </table>
            {{ $projects->links() }}
        </div>
    </div>
</div>
@endsection
