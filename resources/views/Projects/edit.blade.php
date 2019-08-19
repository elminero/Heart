@extends('layouts.master')

@section('title', 'Project')

@section('contents')

    <div class="row">
        <div class="col-sm-4">
            <h3>Project</h3>
            <p>{{$project->title}}</p>




        </div>
        <div class="col-sm-4">
            <h3>Change Your Project</h3>
            <form action="/projects/{{$project->id}}" method="post">

                @csrf
                @method('patch')

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{$project->title}}">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control">{{$project->description}}</textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Change It</button>
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

