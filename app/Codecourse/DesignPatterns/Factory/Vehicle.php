<?php
namespace Codecourse\DesignPatterns\Factory;

class Vehicle
{
	public $model;
	
	public function __construct($model)
	{
		$this->model = $model;
	}
}