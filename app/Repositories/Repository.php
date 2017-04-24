<?php

namespace App\Repositories;

class Repository
{
    protected $model;
    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    public function find($id)
    {
        return $this->model->find($id);
    }
    public function findBy($att, $column)
    {
        return $this->model->where($att, $column);
    }
}