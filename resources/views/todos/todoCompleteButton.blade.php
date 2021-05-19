@if ($todo->completed)
    <span onclick="event.preventDefault();document.getElementById('form-complete-{{ $todo->id }}').submit()"  class="fas fa-check px-4 text-green-500 cursor-pointer"/>
        <form style="display: none;" id="{{ 'form-complete-'.$todo->id }}" action="{{ route('todo.incomplete',$todo->id) }}" method="post">
            @csrf
            @method('put')
        </form>
    @else
    <span onclick="event.preventDefault();document.getElementById('form-complete-{{ $todo->id }}').submit()" class="fas fa-check px-4 text-gray-300 cursor-pointer"/>
    <form style="display: none;" id="{{ 'form-complete-'.$todo->id }}" action="{{ route('todo.complete',$todo->id) }}" method="post">
        @csrf
        @method('put')
    </form>
                
@endif