<?php

namespace App\Services;

use App\Repositories\Eloquent\ShowtimeRepository;


class CreateShowtime
{
    protected $showtimeRepository;
    
    public function __construct(ShowtimeRepository $showtimeRepository){
    	$this->showtimeRepository = $showtimeRepository;
    }

    public function execute(array $data){
       
        $showtime = $this->showtimeRepository->create([
         'cinema_id' => $data['cinema_id'],
         'movie_id' => $data['movie_id'],
         'showtime' => $data['showtime']
        ]);

        return $showtime;
        
    }
}
