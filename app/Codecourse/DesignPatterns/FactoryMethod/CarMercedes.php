<?php
namespace Codecourse\DesignPatterns\FactoryMethod;

use Codecourse\DesignPatterns\FactoryMethod\VehicleInterface;

class CarMercedes implements VehicleInterface
{
    /**
     * @var string
     */
    private $color;

    public function setColor($rgb)
    {
        $this->color = $rgb;
    }

    public function addAMGTuning()
    {
        // do additional tuning here
    }
}