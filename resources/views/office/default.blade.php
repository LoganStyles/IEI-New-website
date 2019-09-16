@extends('layouts.app')
@section('content')
    <div class="card border-light mb-3 mt-3">
        <div class="card-header"><strong>Default</strong></div>
            <div class="card-body">
                <div class="row">
                @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
                @endif

                @if(Session::has('flash_message'))
                <div class="alert alert-success">
                    {{ Session::get('flash_message') }}
                </div>
                @endif

                @foreach($pages as $task)
                <h3>{{ $task->title }}</h3>
                <p>{{ $task->description}}</p>
                <p>
                    <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-info">View Task</a>
                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Edit Task</a>
                </p>
                <hr>
                @endforeach
                    
                </div>
            </div>
        </div>
    </div>
@endsection
