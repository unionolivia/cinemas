<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Interfaces\ShowtimeRepositoryInterface;
use App\Showtime;

class ShowtimeRepository implements ShowtimeRepositoryInterface
{
  protected $showtime;

    public function __construct(Showtime $showtime)
    {
        $this->showtime = $showtime;
    }

    public function create(array $data)
    {
        return $this->showtime->create($data);
    }
    
    public function listShowtime()
    {
        return $this->showtime->with('movie', 'cinema')->get();
    }
}
