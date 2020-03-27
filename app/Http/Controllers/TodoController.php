<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function all()
    {
        $todos = Todo::has("assignee")->paginate();
        // dd($todos);
        return view('todos.list', [
            "todos" => $todos
        ]);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required'
        ]);

        $todo = new Todo();
        $todo->title = $request->title;

        $todo->save();

        // dd($request->all());
        return redirect()->route('todo.list');
    }

    public function edit($id)
    {
        // dd($id);
        $todo = Todo::has("assignee")->find($id);
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, $id)
    {
        // dd($id);
        $todo = Todo::has("assignee")->find($id);
        $todo->title = $request->title;
        $todo->assignee_id = $request->assignee_id;
        $todo->save();
        return redirect()->route('todo.list');
    }

    public function destroy($id)
    {
        // dd($id);
        Todo::destroy($id);
        return back();
    }
}
