<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function project()
    {
        return $this->belongsToMany(Project::class, 'user_has_project', 'user_id', 'project_id');
    }

    public function user_profile()
    {
        return $this->hasOne(User_profile::class, 'user_id');
    }

    public function report()
    {
        return $this->hasMany(Report::class, 'user_id');
    }

    public function task()
    {
        return $this->hasMany(Task::class, 'user_id');
    }

    public function role()
    {
        return $this->belongsToMany(Role::class, 'user_has_role', 'user_id', 'role_id');
    }
}
