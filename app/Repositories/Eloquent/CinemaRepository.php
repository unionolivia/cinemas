<?php

namespace App\Repositories;

use App\Repositories\BaseRepositoryInterface;

class CinemaRepository implements BaseRepositoryInterface
{
  protected $cinema;

    public function __construct(Cinema $cinema)
    {
        $this->cinema = $cinema;
    }
    
    public function create(array $data)
    {
        $cinema = $this->cinema->create($data);
        return $cinema->toArray();
    }
}
