<?php
namespace Codecourse\DesignPatterns\FactoryMethod;

use Codecourse\DesignPatterns\FactoryMethod\FactoryMethod;

class PakistaniFactory extends FactoryMethod
{
	protected function createVehicle($type)
    {
        switch ($type) {
            case parent::CHEAP:
                return new Bicycle();
            case parent::FAST:
                return new CarFerrari();
            default:
                throw new \InvalidArgumentException("$type is not a valid vehicle");
        }
    }
}