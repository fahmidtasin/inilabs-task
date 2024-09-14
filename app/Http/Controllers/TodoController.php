<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    // Display all to-do items (Read)
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', compact('todos'));
    }

    // Show the form for creating a new to-do item (Create)
    public function create()
    {
        return view('todos.create');
    }

    // Store a newly created to-do item (Create)
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        Todo::create([
            'title' => $request->title,
            'completed' => $request->has('completed'), // Handle checkbox value
        ]);

        return redirect()->route('todos.index')->with('message', 'To-Do created successfully!');
    }


    // Show the form for editing an existing to-do item (Update)
    public function edit($id)
    {
        $todo = Todo::findOrFail($id);
        return view('todos.edit', compact('todo'));
    }

    // Update an existing to-do item (Update)
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $todo = Todo::findOrFail($id);
        $todo->update([
            'title' => $request->title,
            'completed' => $request->has('completed'), // Handle checkbox value
        ]);

        return redirect()->route('todos.index')->with('message', 'To-Do updated successfully!');
    }

    // Delete a to-do item (Delete)
    public function destroy($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();

        return redirect()->route('todos.index')->with('message', 'To-Do deleted successfully!');
    }
}
