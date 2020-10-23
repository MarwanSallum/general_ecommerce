<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;
    
    protected $fillable = [
        'name', 'email','avatar', 'password', 'created_at', 'updated_at',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
