<?php

namespace App\Interfaces;

use App\Models\Todo;

interface TodoRepositoryInterface
{
    public function all();

    public function find($id);
    
    public function findByTask($task);

    public function create(array $attributes);

    public function update($id, array $attributes);

    public function delete($id);
}
