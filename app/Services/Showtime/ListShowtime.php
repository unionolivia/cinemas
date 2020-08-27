<?php

namespace App\Services;

use App\Repositories\Eloquent\ShowtimeRepository;


class ListShowtime
{
    protected $showtimeRepository;

    public function __construct(ShowtimeRepository $showtimeRepository){
        $this->showtimeRepository = $showtimeRepository;
    }

    public function execute(){
        
        return $this->showtimeRepository->listShowtime();

    }

    

}
