<?php
namespace Codecourse\DesignPatterns\Factory;

use Codecourse\DesignPatterns\Factory\Vehicle;

class VehicleFactory
{

    public function create($model)
    {
        
        return new Vehicle($model);
    }
}