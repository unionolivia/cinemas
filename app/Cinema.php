<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Showtime;

class Cinema extends Model
{
    protected $fillable = ['name', 'address'];
    
    
    
    public function showtime()
    {
        return $this->hasMany('App\Showtime');
    }
}
