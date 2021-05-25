<div>
    <div class="flex justify-center pb-4">
        <h3 class="text-lg pb-4">Add Steps</h3>

        <span wire:click = "increment" class="fas fa-plus px-2 py-2 cursor-pointer"></span>

    </div>
    @for($i = 0; $i < $steps; $i++)
        <div class="flex justify-center py-2">
            <input type="text" name="step" id="" class="py-1 px-2 border rounded" placeholder="{{'Step ' .($i+1)}}">
            <span wire:click = "decrement" class="fas fa-times text-red-500 px-2 py-2 cursor-pointer"></span>
        </div>
    @endfor
</div>
