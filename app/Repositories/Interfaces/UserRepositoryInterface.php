<?php

namespace App\Repositories\Interfaces;


interface UserRepositoryInterface
{
    
    public function find($id, array $with = array());
    public function create(array $input);
    public function update(array $input);
    public function delete($id);

}
