<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'project';

    protected $fillable = [
        'category_id',
        'name',
        'start_day',
        'end_day',
        'status',
        'performer'
    ];

    public function user()
    {
        return $this->belongsToMany(User::class, 'user_has_project', 'project_id', 'user_id');
    }

    public function report()
    {
        return $this->hasMany(Report::class, 'project_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function task()
    {
        return $this->hasMany(Task::class, 'project_id');
    }
}
