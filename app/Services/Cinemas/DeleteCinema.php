<?php

namespace App\Services;

use App\Repositories\Eloquent\CinemaRepository;
use App\Exceptions\NotFoundException;

class DeleteCinema
{
    protected $cinemaRepository;

    public function __construct(CinemaRepository $cinemaRepository){
        $this->cinemaRepository = $cinemaRepository;
    }

    public function execute($id){
        
        if (!$this->cinemaRepository->find($id)){
            throw new NotFoundException('not_found');
        }

        return $this->cinemaRepository->delete($id);

    }

    

}
