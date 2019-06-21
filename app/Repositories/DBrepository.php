<?php


namespace App\Repositories;


use Illuminate\Database\Eloquent\Model;

abstract class DBRepository
{

    protected $model;
    
    function __construct(Model $model)
    {
        $this->model = $model;
    }


    public function getAll(){
        
        return $this->model->all();
        
    }
}
