<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Task;

class DeleteTaskTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_delete_task()
    {
        $testTaskName = 'test_name';
        $task = Task::factory()->create([
            'name' => $testTaskName,
        ]);
        $this->assertModelExists($task);
        $this->assertDatabaseHas('tasks', [
            'name' => $testTaskName
        ]);
        $task->delete();
        $this->assertDeleted($task);
        $this->assertDatabaseMissing('tasks', [
            'name' => $testTaskName
        ]);
    }
}
