<?php

namespace App\Repositories\Interfaces;


interface ShowtimeRepositoryInterface
{
    
    public function listShowtime();
    public function create(array $data);

}
