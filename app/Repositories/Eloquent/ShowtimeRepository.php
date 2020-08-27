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
        $showtime = $this->showtime->create($data);
        return $showtime;
    }
    
    public function listShowtime()
    {
        $result = $this->showtime->with('movie', 'cinema')->get();
        return $result;
    }
}
