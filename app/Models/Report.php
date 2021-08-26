<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $table = 'report';

    protected $fillable = [
        'user_id',
        'project_id',
        'task',
        'title',
        'content',
        'writer'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id' );
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function task()
    {
        return $this->belongsTo(Task::class, 'task_id');
    }
}
