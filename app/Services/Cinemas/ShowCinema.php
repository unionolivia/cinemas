<?php

namespace App\Services;

use App\Repositories\Eloquent\CinemaRepository;


class ShowCinema
{
    protected $cinemaRepository;

    public function __construct(CinemaRepository $cinemaRepository){
        $this->cinemaRepository = $cinemaRepository;
    }

    public function execute($id){
        
        return $this->cinemaRepository->find($id);

    }

    

}
