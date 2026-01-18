<?php

namespace App\Services\Car;

use LaravelEasyRepository\Service;
use App\Repositories\Car\CarRepository;

class CarServiceImplement extends Service implements CarService{

     /**
     * don't change $this->mainRepository variable name
     * because used in extends service class
     */
     protected $mainRepository;

    public function __construct(CarRepository $mainRepository)
    {
      $this->mainRepository = $mainRepository;
    }

    // Define your custom methods :)
}
