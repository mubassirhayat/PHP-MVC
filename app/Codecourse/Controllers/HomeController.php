<?php
namespace Codecourse\Controllers;

use Codecourse\Library\Controller;
use Codecourse\Models\User;

class HomeController extends Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index($params)
	{
		var_dump($params);
		$user = new User();
		$users = $user->all();
		$data = [
			'title' => 'Home',
			'users' => $users
		];
		$this->view->loadView('home/index', $data);
	}
}