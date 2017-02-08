<?php
namespace Codecourse\Controllers;

use Codecourse\Library\Controller;
use Codecourse\Models\User;

class UserController extends Controller
{
	
	function __construct()
	{
		
	}

	public function index()
	{
		$user = new User();
		var_dump($user->all());
	}

	public function create()
	{
		# code...
	}

	public function store()
	{
	}

	public function edit()
	{
		var_dump("Edit Action of User Controller");
	}

	public function update()
	{
		# code...
	}

	public function delete()
	{
		# code...
	}
}