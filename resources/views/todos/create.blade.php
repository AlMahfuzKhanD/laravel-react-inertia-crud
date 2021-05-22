@extends('todos.layouts')
@section('content')
<div class="flex justify-center border-b pb-4">
    <h3 class="text-2xl pb-4">What Next you need to do</h3>
    <a class="mx-5 py-2 text-gray-400 cursor-pointer" href="{{ route('todo.index') }}" >
    <span class="fas fa-arrow-left"></span></a>
    
</div>

        
        <x-alert/>

        <form action="{{ route('todo.store') }}" method="post" class="py-5">
            @csrf
            <input type="text" name="title" id="" class="py-2 px-2 border rounded">
            <input type="submit" value="Create" class="p-2 border rounded">
        </form>
        
@endsection