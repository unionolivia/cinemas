<?php

namespace App\Repositories\Interfaces;


interface CinemaRepositoryInterface
{
    
    public function find($id, array $with = array());
    public function create(array $input);
    public function update($id, array $input);
    public function delete($id);

}
