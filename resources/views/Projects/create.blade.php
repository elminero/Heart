@extends('layouts.master')

@section('title', 'New Project')

@section('contents')

    <div class="row">
        <div class="col-sm-4">
            <h3>Add a New Project!</h3>
            <form action="/projects" method="post">

                @csrf

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control {{$errors->has('title') ? 'error' : '' }}" value="{{old('title')}}">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description"
                              class="form-control {{$errors->has('description') ? 'error' : '' }}">{{old('description')}}
                    </textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add a New Project</button>
                </div>

            </form>

            @include('partials.errors')

        </div>
        <div class="col-sm-4">
            <h3>List of Projects</h3>
            <ul>
                @foreach($projects as $project)
                    <li><a href="/projects/{{$project->id}}">{{$project->title}}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="col-sm-4">
            <h3>Column 3</h3>
            <p>Lorem ipsum dolor..</p>
        </div>
    </div>

@endsection









