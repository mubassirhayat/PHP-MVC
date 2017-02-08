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
		$userData = [
			'name' => "Maaz",
			'email' => "maaz@example.com",
			'phone' => "12312312",
			'reg_no' => "4644564564",
			'address' => "Kohat"
		];

		$response = $user->save($userData);
		var_dump($response);
		if ($response) {
			echo "<h1>User Registered</h1>";
		}
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