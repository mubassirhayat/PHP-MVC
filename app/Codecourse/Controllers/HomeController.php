<?php
namespace Codecourse\Controllers;

use Codecourse\Library\Controller;
use Codecourse\Models\User;
use Codecourse\DesignPatterns\Singleton\Singleton;

class HomeController extends Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index($params = NULL)
	{
		$s1 = Singleton::getInstance();
		var_dump($s1);

		$s2 = Singleton::getInstance();
		var_dump($s2);

		$s3 = Singleton::getInstance();
		var_dump($s3);

		$s4 = Singleton::getInstance();
		var_dump($s4);
        
		// $this->view->loadView('home/index');
	}
}