<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Category extends Model
{
    use HasFactory,Notifiable;

    protected $table = 'category';

    protected $fillable = [
        'name',
    ];

    public function project()
    {
        return $this->hasMany(Project::class,'category_id');
    }
}
