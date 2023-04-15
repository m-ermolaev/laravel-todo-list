<div>
  <table>
    <tbody>
      @foreach ($tasks as $task)
      <tr>
        <td class="">
          <div>{{ $task->name }}</div>
        </td>

        <td>
          <a wire:click="handleDeleteClick({{$task->id}})">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>