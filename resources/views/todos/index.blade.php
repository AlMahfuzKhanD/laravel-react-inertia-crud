@extends('todos.layouts')
@section('content')
<div class="flex justify-center border-b pb-4">
    <h3 class="text-2xl">All Your Todos</h3>
    <a class="mx-5 py-2 text-blue-400 cursor-pointer" href="{{ route('todo.create') }}" >
    <span class="fas fa-plus-circle"></span></a>
    
</div>
<ul class="my-5"> 
    <x-alert/>
    @foreach ($todos as $todo)
        <li class="flex justify-between py-2">
            <div>
                @include('todos.todoCompleteButton')
            </div>
            @if ($todo->completed)
            <p class="mx-5 py-1 px-1 line-through">{{ $todo->title }}</p> 
            @else
            <p  class="mx-5 py-1 px-1">{{ $todo->title }}</p>  
            @endif
            
            <div>   
                <a class=" py-1 px-1 text-purple-400" href="{{ route('todo.edit',$todo->id) }}"><span class="fas fa-edit px-2" /></a>
                <span 
                onclick="event.preventDefault();
                if(confirm('are you sure you want to delete?')){
                    document.getElementById('form-delete-{{ $todo->id }}').submit()
                }"
                
                 class="fas fa-trash px-4 text-red-400 cursor-pointer"/>
                    <form style="display: none;" id="{{ 'form-delete-'.$todo->id }}" action="{{ route('todo.destroy',$todo->id) }}" method="post">
                        @csrf
                        @method('delete')
                    </form>
                
                
            </div>
            
        </li> 
    @endforeach
</ul>
@endsection