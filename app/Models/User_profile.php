<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_profile extends Model
{
    use HasFactory;

    protected $table = 'user_profile';

    protected $fillable = [
        'user_id',
        'fullname',
        'address',
        'sdt',
        'avata_image'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
