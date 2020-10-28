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

    public function scopeSelection($query){
        return $query -> select('id', 'translation_lang', 'name', 'slug', 'photo','active', 'translation_of');
    }

    public function getPhotoAttribute($val){
        return ($val !== null) ? asset('assets/'. $val) : "";
    }

    public function getActive(){
      return  $this -> active == 1 ? 'active' : 'not active';
    }

    public function categories(){
        return $this -> hasMany(self::class, 'translation_of');
    }

}
