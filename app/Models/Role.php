<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'role';

    protected $fillable = [
        'name',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsToMany(User::class, 'user_has_role', 'role_id', 'user_id');
    }

}
