<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notification extends Model
{
    use HasFactory;

    public function user()
    {
        $this->belongsTo(User::class, 'user_id');
    }
    public function project()
    {
        $this->belongsTo(project::class, 'project_id');
    }
    public function task()
    {
        $this->belongsTo(task::class, 'task_id');
    }
}
