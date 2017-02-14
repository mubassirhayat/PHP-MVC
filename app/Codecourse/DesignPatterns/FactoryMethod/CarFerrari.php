<?php
namespace Codecourse\DesignPatterns\FactoryMethod;

use Codecourse\DesignPatterns\FactoryMethod\VehicleInterface;

class CarFerrari implements VehicleInterface
{
    /**
     * @var string
     */
    private $color;

    public function setColor($rgb)
    {
        $this->color = $rgb;
    }
}