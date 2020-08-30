<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\AbstractEloquentRepository;
use Illuminate\Support\MessageBag;
use App\User;

class UserRepository extends AbstractEloquentRepository implements UserRepositoryInterface
{

  protected $model;

  /**
   * 
   */
  public function __construct(User $model)
  {
    parent::__construct(new MessageBag);
    $this->model = $model;
  }
    
    /**
     * Create
     * 
     * @param $array
     * @return \Illuminate\Database\Eloquent\User $user
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * Update
     */
    public function update(array $data)
    {
      
    }

    /**
     * Delete
     */
    public function delete($id){
      $model = $this->find($id);

      if($model){
        return $model->delete;
      }

    }

    /**
     * Get user by email
    */
    public function getFirstBy($key, $value, array $with = array()){
      return $this->model->where($key, '=', $value)->first();
    }


}
