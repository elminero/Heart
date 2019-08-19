@extends('layouts.master')

@section('title', 'Project')

@section('contents')

    <div class="row">
        <div class="col-sm-4">
            <h3>Project: {{$project->title}}</h3>

            <div>
                {{$project->description}}
            </div>

            <a href="/projects/{{$project->id}}/edit"><button class="btn btn-primary">Edit</button></a>

            <form style="float: right" method="post" action="/projects/{{$project->id}}">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>


        </div>
        <div class="col-sm-4">
            <h3>Create a New Task</h3>
            <form action="/projects/{{$project->id}}/Tasks" method="post">

                @csrf

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add a New Task</button>
                </div>

            </form>
        </div>
        <div class="col-sm-4">
            <h3>List of Task</h3>

                @foreach($project->tasks as $task)

                    <form method="post" action="/tasks/{{$task->id}}">

                        @csrf
                        @method('patch')

                        <label class="{{$task->completed?'completed':''}}">
                            <input type="checkbox" name="completed" onchange="this.form.submit()" {{$task->completed?'checked':''}}>
                            {{$task->title}}
                        </label>
                    </form>

                @endforeach

        </div>
    </div>

@endsection
