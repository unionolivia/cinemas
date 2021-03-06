<?php

namespace App\Services;

use App\Repositories\Eloquent\CinemaRepository;

class CreateCinema
{
    protected $cinemaRepository;

    public function __construct(CinemaRepository $cinemaRepository){
        $this->cinemaRepository = $cinemaRepository;
    }

    public function execute(array $data){
            return $this->cinemaRepository->create([
             'name' => $data['name'],
             'address' => $data['address']
            ]);
            
    }
}
