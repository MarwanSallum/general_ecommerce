<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Language extends Model
{
    use Notifiable;
    
    protected $fillable = [
        'abbr', 'locale','name', 'native', 'app_name', 'direction','active',
    ];

    public function scopeActive($query){
        return $query -> where('active', true);
    }

    public function scopeSelection($query){
        return $query -> select('abbr','name','direction','active');
    }

    public function getActiveAttribute($val){
       return  $val == 1 ? 'active' : 'not active';
    }

}
