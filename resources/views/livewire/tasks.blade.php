<ul>
    @foreach($tasks as $task)
        <li class="task-element {{ $task['status'] == '1' ? 'is-complete' : '' }}">
            <div class="task-block">
                <div class="task-block-left">
                    <div class="task-title">{{ $task['title'] }}</div>
                    <div class="task-actions">
                        <button wire:click="delete({{ $task['id']  }})" class="btn red-btn">Delete task</button>
                    </div>
                </div>
                <div class="task-block-right">
                    <label for="{{ $task['id'] }}-task-status"> Complete</label>
                    <input wire:model="task" id="{{ $task['id'] }}-task-status" type="checkbox" wire:click="edit({{ $task['id'] }})"
                                    value="{{ $task['status'] }}" {{ $task['status'] == '1' ? 'checked' : '' }} />
                </div>

            </div>
        </li>
    @endforeach
</ul>
