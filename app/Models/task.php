<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    use HasFactory;

    // Table name
    protected $table = 'tasks';

    // Mass assignable attributes
    protected $fillable = ['name', 'description', 'project', 'project_naam', 'status', 'deadline', 'completed_at', 'deleted', 'created_at', 'updated_at'];

    // Define the relationship: each task belongs to one project
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
