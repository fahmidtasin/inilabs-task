@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">To-Do List</h1>

        @if(session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <a href="{{ route('todos.create') }}" class="btn btn-primary mb-3">Create New To-Do</a>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Title</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($todos as $todo)
                <tr>
                    <td>{{ $todo->title }}</td>
                    <td>
                        @if($todo->completed)
                            <span class="badge bg-success">Completed</span>
                        @else
                            <span class="badge bg-warning">Incomplete</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('todos.edit', $todo->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
