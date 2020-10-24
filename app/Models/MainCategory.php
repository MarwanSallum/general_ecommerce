<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class MainCategory extends Model
{
    use Notifiable;
    
    protected $fillable = [
        'translation_lang', 'translation_of','name', 'slug', 'photo', 'active',
    ];

    public function scopeActive($query){
        return $query -> where('active', true);
    }

}
