<?php


namespace App\Repositories;


use Illuminate\Database\Eloquent\Model;

/**
 * Creation of an abstract repository class instead of trait is that the method 
 * let's say here getAll() can be overridden and modified the way required as there might be a possibility 
 * that the data from getAll() might be required in a different orientation
 * Class DBRepository
 * @package App\Repositories
 */
abstract class DBRepository
{

    protected $model;
    
    function __construct(Model $model)
    {
        $this->model = $model;
    }


    public function getAll(){
        
        return $this->model->all()->toArray();
        
    }
}
