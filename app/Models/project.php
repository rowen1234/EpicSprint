<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;

    // Define the relationship: a project has many tasks
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
    protected $fillable = ['name', 'description', 'deadline'];
}
