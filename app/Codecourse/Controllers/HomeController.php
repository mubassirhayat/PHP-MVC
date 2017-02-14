<?php
namespace Codecourse\Controllers;

use Codecourse\Library\Controller;
use Codecourse\Models\User;
use Codecourse\DesignPatterns\FactoryMethod\FactoryMethod;
use Codecourse\DesignPatterns\FactoryMethod\PakistaniFactory;
use Codecourse\DesignPatterns\FactoryMethod\GermanFactory;

class HomeController extends Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index($params = NULL)
	{
		$factory = new PakistaniFactory();
        $result = $factory->create(FactoryMethod::FAST, 'red');

        var_dump($result);
		
		// $this->view->loadView('home/index');
	}
}