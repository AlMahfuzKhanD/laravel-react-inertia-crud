@extends('todos.layouts')
@section('content')
<div class="flex justify-center border-b pb-4">
    <h3 class="text-2xl">All Your Todos</h3>
    <a class="mx-5 py-2 px-1 rounded bg-blue-400 text-white cursor-pointer" href="/todos/create">Create New</a>
</div>
<ul class="my-5"> 
    @foreach ($todos as $todo)
        <li class="flex justify-between py-2">
            @if ($todo->completed)
            <p class="mx-5 py-1 px-1 line-through">{{ $todo->title }}</p> 
            @else
            <p class="mx-5 py-1 px-1">{{ $todo->title }}</p>  
            @endif
            
            <div>   
                <a class=" py-1 px-1 text-purple-400" href="{{'/todos/'.$todo->id.'/edit' }}"><span class="fas fa-edit px-2" /></a>
                @if ($todo->completed)
                <span class="fas fa-check px-2 text-green-500"/>
                @else
                <span class="fas fa-check px-2 text-gray-300"/>
                @endif
                
            </div>
            
        </li> 
    @endforeach
</ul>
@endsection