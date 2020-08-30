<?php

namespace App\Services;

use App\Repositories\Eloquent\CinemaRepository;


class ListCinema
{
    protected $cinemaRepository;

    public function __construct(CinemaRepository $cinemaRepository){
        $this->cinemaRepository = $cinemaRepository;
    }

    public function execute(){
        
        return $this->cinemaRepository->all();

    }

    

}
