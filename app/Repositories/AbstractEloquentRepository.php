<?php

namespace App\Repositories;

use StdClass;
use Illuminate\Support\MessageBag;


abstract class AbstractEloquentRepository
{
    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model;

    /**
     * @var Illuminate\Support\MessageBag
     */
    protected $errors;
  
    public function __construct(MessageBag $errors)
    {
        $this->errors = $errors;

    }

    /**
     * Make a new instance of the entity to query on
     * @param array $with
     */
    public function make(array $with = array()){
        return $this->model->with($with);
    }

    /**
     * Retrieve all entities
     * 
     * @param array $with
     * @return \Illuminate\Database\Eloquent\Collection
     */  
    public function all(array $with = array()){
        $entity = $this->make($with);

        return $entity->get();
    }

    /**
     * find a single entity
     * 
     * @param int $id
     * @param array $with
     * 
     * @return \Illuminate\Database\Eloquent\Model
     */

     public function find($id, array $with = array()){
         $entity = $this->make($with);

         return $entity->find($id);
     }

    /**
     * Search for many results by keys and value
     * @param string $key
     * @param mixed $value
     * @param array $with
     * @return \Illuminate\Database\Query\Builders
     * 
     */

    public function getBy($key, $value, array $with = array()){
         return $this->make($with)->where($key, '=', $value)->get();
    }

    /**
     * Find a single entity by key value
     * 
     * @param string $key
     * @param string $value
     * @param array $with
     * 
     */
    public function getFirstBy($key, $value, array $with = array()){
        return $this->make($with)->where($key, '=', $value)->first();
    }

    /**
     * Return the errors
     * 
     * @return Illuminate\Support\MessageBag
     */
    public function errors(){
        return $this->errors;
    }

}
