<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Interfaces\CinemaRepositoryInterface;
use App\Repositories\AbstractEloquentRepository;
use Illuminate\Support\MessageBag;
use App\Cinema;

class CinemaRepository extends AbstractEloquentRepository implements CinemaRepositoryInterface
{

  protected $model;

  /**
   * 
   */
  public function __construct(Cinema $model)
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
    public function update($id, array $data)
    {
      $model = $this->find($id);

      if($model){
        $model->update($data);
        return $model;
      }

    }

    /**
     * Delete
     */
    public function delete($id){
      $model = $this->find($id);

      if($model){
        $model->delete();
        return true;
      }
    }

    public function all(array $with = array()){
      return $this->model->all();
    }

    public function find($id, array $with = array()){
      return $this->model->find($id);
    }

}
