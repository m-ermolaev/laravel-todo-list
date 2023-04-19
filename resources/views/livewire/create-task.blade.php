<div>
    <input placeholder="Description..." wire:model="name" wire:keydown="handleNameChange" />
    <button wire:click="handleCreateClick" {{ !$name ? 'disabled' : '' }}>Create task</button>
    <div class="h-8">
        @error('name') <span class="error">{{ $message }}</span> @enderror
    </div>
</div>