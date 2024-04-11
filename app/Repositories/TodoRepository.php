<?php

namespace App\Repositories;

use App\Models\Todo;
use App\Interfaces\TodoRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class TodoRepository implements TodoRepositoryInterface
{
    protected $todo;

    public function __construct(Todo $todo)
    {
        $this->todo = $todo;
    }

    public function all()
    {
        return $this->todo::all();
    }

    public function find($id)
    {
        return $this->todo->find($id);
    }

    public function findByTask($task)
    {
        return $this->todo->where('task', $task)->first();
    }

    public function create(array $attributes)
    {
        return $this->todo->create($attributes);
    }

    public function update($id, array $attributes)
    {
        $todo = $this->find($id);
        if (!$todo) {
            throw new ModelNotFoundException("Todo not found");
        }

        $todo->update($attributes);
        return $todo;
    }

    public function delete($id)
    {
        $todo = $this->find($id);
        if (!$todo) {
            throw new ModelNotFoundException("Todo not found");
        }

        $todo->delete();
        return true;
    }
}
