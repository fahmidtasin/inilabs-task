@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Edit To-Do</h1>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('todos.update', $todo->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" value="{{ $todo->title }}" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="completed" name="completed" {{ $todo->completed ? 'checked' : '' }}>
                <label class="form-check-label" for="completed">Completed</label>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('todos.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
@endsection
