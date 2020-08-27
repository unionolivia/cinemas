<?php

namespace App\Repositories\Interfaces;


interface UserRepositoryInterface
{
    
    public function findBy($column, $value);
    public function create(array $data);

}
