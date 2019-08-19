@extends('layouts.master')

@section('title', 'Project')

@section('contents')

    <div class="row">

        <div class="col-sm-4">
            <h3>List of Projects</h3>

            <ul>
                @foreach($projects as $project)
                    <li>
                        <a href="projects/{{$project->id}}">{{$project->title}}</a>
                    </li>
                @endforeach
            </ul>

        </div>

        <div class="col-sm-4">
            <h3>col-sm-4</h3>
            <p>Lorem ipsum dolor..</p>

        </div>

        <div class="col-sm-4">
            <h3>col-sm-4</h3>
            <p>Lorem ipsum dolor..</p>
        </div>

    </div>

@endsection
