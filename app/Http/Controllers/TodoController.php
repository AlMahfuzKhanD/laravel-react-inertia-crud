<?php

namespace App\Http\Controllers;

use App\Todo;
use Dotenv\Validator;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    //
    public function index()
    {
        return view('todos.index');
    }

    public function create()
    {
        return view('todos.create');
    }

    public function edit()
    {
        return view('todos.edit');
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required | max:255 | min:4'
        ]);
        // $rules = [
        //     'title' => 'required | max:255 | min:4'
        // ];

        // $messages = [
        //     'title.required' => 'title is required.',
        //     'title.max' => 'Max 255 character approved',
        //     'title.min' => 'Min 4 character approved',
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
