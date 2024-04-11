<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = ['task', 'status'];
    
    protected $table = 'todos';

    public function subtodos()
    {
        return $this->hasMany(Subtodo::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
