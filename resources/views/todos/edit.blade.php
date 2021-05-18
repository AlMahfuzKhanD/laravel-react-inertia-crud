@extends('todos.layouts')
@section('content')
<h3 class="text-2xl border-b pb-4">Update to do</h3>
        
        <x-alert/>

        <form action="{{ route('todo.update', $todo->id) }}" method="post" class="py-5">
            @csrf
            @method('patch')
            <input type="text" name="title" id="" class="py-2 px-2 border rounded" value="{{ $todo->title }}">
            <input type="submit" value="Update" class="p-2 border rounded">
        </form>
        <a class="m-5 py-2 px-1 rounded bg-blue-400 text-white " href="/todos">All Todo</a>
@endsection