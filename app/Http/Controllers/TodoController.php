<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();

        return view('index')->with(['todos'=> $todos]);
    }

    public function create(Request $request)
    {
        $todo = new Todo();
        $todo->content= $request->content;
        $todo->save();

        return redirect()
            ->route('todo.index');
    }

    public function update(Request $request)
    {
        $todo->content= $request->content;
        $todo->save();

        return redirect()
            ->route('todo.index');
    }

    public function delete(Request $request)
    {
        $todo->delete();

        return redirect()
            ->route('todo.index');
    }
}
