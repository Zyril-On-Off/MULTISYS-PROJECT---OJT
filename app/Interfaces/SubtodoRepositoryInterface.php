<?php

namespace App\Interfaces;

use App\Models\Subtodo;
use App\Models\Todo;

interface SubtodoRepositoryInterface
{
    public function all();

    public function find($id);

    public function create(array $attributes);

    public function update($id,array $attributes);

    public function delete($id);
}
