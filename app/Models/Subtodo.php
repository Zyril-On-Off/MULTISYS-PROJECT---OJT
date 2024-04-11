<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtodo extends Model
{
    use HasFactory;

    protected $fillable = ['task', 'status'];
    
    protected $table = 'subtodos';


    public function todo()
    {
        return $this->belongsTo(Todo::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
