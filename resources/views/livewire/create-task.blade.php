<div>
    <input placeholder="Description..." wire:model="name" />
    <button wire:click="handleCreateClick" {{ !$name ? 'disabled' : '' }}>Create task</button>
</div>