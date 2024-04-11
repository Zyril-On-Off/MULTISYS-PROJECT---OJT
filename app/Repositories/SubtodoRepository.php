<?php

namespace App\Repositories;

use App\Models\Subtodo;
use App\Models\Todo;
use App\Interfaces\SubtodoRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class SubtodoRepository implements SubtodoRepositoryInterface
{
    protected $subtodo;

    public function __construct(Subtodo $subtodo)
    {
        $this->subtodo = $subtodo;
    }

    public function all()
    {
        return $this->subtodo::all();
    }

    public function find($id)
    {
        return $this->subtodo->find($id);
    }

    public function create(array $attributes)
    {
        return $this->subtodo->create($attributes);
    }

    public function update($id, array $attributes)
    {
        $result = $this->find($id);
        if (!$result) {
            throw new ModelNotFoundException("Todo not found");
        }

        $result->update($attributes);
        return $result;
    }

    public function delete($id)
    {
        $result = $this->find($id);
        if (!$result) {
            throw new ModelNotFoundException("Todo not found");
        }

        $result->delete();
        return true;
    }
}
