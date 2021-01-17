<?php

interface Service
{
    public function getCost();
}

class CarService  implements Service
{

    protected $cost;

    public function __construct()
    {
        $this->cost = 50;
    }

    public function getCost()
    {
        echo $this->cost;
    }

}

class OilChange extends CarService
{
    protected $cost;

    public function __construct(CarService $carService)
    {
        parent::__construct();
        $this->cost = $carService->cost + 50;
    }

    public function getCost()
    {
        echo $this->cost;
    }
}

 (new OilChange(new CarService()))->getCost();


?>
