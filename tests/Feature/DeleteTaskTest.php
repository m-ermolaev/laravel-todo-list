<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Task;

class DeleteTaskTest extends TestCase
{
    /**use RefreshDatabase;
     * A basic feature test example.
     *
     * @return void
     */
    public function test_delete_task()
    {
        $task = Task::factory()->create([
            'name' => 'Go to market',
        ]);
        $this->assertModelExists($task);
        $this->assertDatabaseHas('tasks', [
            'name' => $task->name
        ]);
        $task->delete();
        $this->assertDeleted($task);
        $this->assertDatabaseMissing('tasks', [
            'name' => $task->name
        ]);
    }
}
