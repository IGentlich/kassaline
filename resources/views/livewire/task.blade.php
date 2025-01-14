<form wire:submit="create" class="form">
    @error('title') <div class="error">{{ $message }}</div> @enderror
    @error('status') <div class="error">{{ $message }}</div> @enderror
    <div>
        <label for="new-task-title"> Title</label><br>
        <input id="new-task-title" wire:model="title">
    </div>
    <div>
        <label for="new-task-status"> Status</label><br>
        <input id="new-task-status" type="checkbox" value="0" wire:model="status">
    </div>
    <button class="btn">Save</button>
</form>
