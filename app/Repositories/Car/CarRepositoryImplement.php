<?php

namespace App\Repositories\Car;

use LaravelEasyRepository\Implementations\Eloquent;
use App\Models\Car;

class CarRepositoryImplement extends Eloquent implements CarRepository{

    /**
    * Model class to be used in this repository for the common methods inside Eloquent
    * Don't remove or change $this->model variable name
    * @property Model|mixed $model;
    */
    protected $model;

    public function __construct(Car $model)
    {
        $this->model = $model;
    }

    // Write something awesome :)
}
