<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Http\Request;
 use App\Http\Requests\TodoCreateRequest;

class TodoController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $todos = Todo::orderBy('completed')->get();
        
        return view('todos.index')->with(['todos'=>$todos]);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function edit(Todo $todo)
    {   
        return view('todos.edit', compact('todo'));
    }

    public function destroy(Todo $todo)
    {   
        $todo->delete();
        return redirect()->back()->with('error' , 'Todo Deleted!!');
    }


    public function update(TodoCreateRequest $request, Todo $todo)
    {
        
        //dd($todo);
        $todo->title = $request->title;
        $todo->save();
        return redirect()->back()->with('message' , 'Updated!!');
    }
    public function complete(Todo $todo)
    {
       $todo->update(['completed'=>true]);
       return redirect()->back()->with('message' , 'Task Marked as completed!!');
    }

    public function incomplete(Todo $todo)
    {
       $todo->update(['completed'=>false]);
       return redirect()->back()->with('error' , 'Task Marked as incomplete!!');
    }

    public function store(TodoCreateRequest $request)
    {

        // $request->validate([
        //     'title' => 'required | max:255 | min:4'
        // ]);
        // $rules = [
        //     'title' => 'required | max:255 | min:4'
        // ];

        // $messages = [
        //     'title.required' => 'title is required.',
        //     'title.max' => 'Max 255 character approved',
        //     'title.min' => 'Min 4 character approved'
        // ];
        
        // $validator = Validator::make($request->all(), $rules, $messages);

        // if ($validator->fails()) {
        //     return redirect()->back()
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }

        Todo::create($request->all());
        return redirect()->back()->with('message', 'Todo Created Successfully');
    }
}
