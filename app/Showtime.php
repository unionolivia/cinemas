<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Movie;
use App\Cinema;

class Showtime extends Model
{
    protected $fillable = ['cinema_id', 'movie_id', 'showtime'];
    
    /**
     * A showtime belongs to a cinema.
     */
    public function cinema()
    {
        return $this->belongsTo('App\Cinema');
    }
    
    /**
     * A showtime belongs to a movie.
     */
    public function movie()
    {
        return $this->belongsTo('App\Movie');
    }
}
