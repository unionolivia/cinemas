<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Interfaces\UserRepositoryInterface;
use App\User;

class UserRepository implements UserRepositoryInterface
{
  protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }
    
    public function create(array $data)
    {
        $user = $this->user->create($data);
        return $user;
    }

    public function findBy($column, $value)
     {
        return $this->user->where($column, $value)->first();
     }
}
