<div class="">
  <table class="">
    <tbody>
      @foreach ($tasks as $task)
      <tr class="mb-4">
        <td class="">
          <div>{{ $task->name }}</div>
        </td>

        <td>
          <button class="ml-4" wire:click="handleDeleteClick({{$task->id}})">Delete task</button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>