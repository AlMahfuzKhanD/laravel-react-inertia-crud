@extends('todos.layouts')
@section('content')
<h3 class="text-2xl border-b pb-4">What Next you need to do</h3>
        
        <x-alert/>

        <form action="{{ route('todo.store') }}" method="post" class="py-5">
            @csrf
            <input type="text" name="title" id="" class="py-2 px-2 border rounded">
            <input type="submit" value="Create" class="p-2 border rounded">
        </form>
        <a class="m-5 py-2 px-1 rounded bg-blue-400 text-white " href="{{ route('todo.index') }}">All Todo</a>
@endsection