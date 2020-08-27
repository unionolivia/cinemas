<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Showtime;

class Movie extends Model
{
    protected $fillable = ['name'];
    
    
    public function showtime()
    {
        return $this->hasMany('App\Showtime');
    }
}
