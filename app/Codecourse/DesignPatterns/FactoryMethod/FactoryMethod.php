<?php
namespace Codecourse\DesignPatterns\FactoryMethod;

use Codecourse\DesignPatterns\FactoryMethod\VehicleInterface;

abstract class FactoryMethod
{
	const CHEAP = 'cheap';
    const FAST = 'fast';

    abstract protected function createVehicle($type);

    public function create($type, $color = 'green')
    {
        $obj = $this->createVehicle($type);
        $obj->setColor($color);

        return $obj;
    }
}