<?php
namespace Codecourse\Controllers;

use Codecourse\Library\Controller;

class HomeController extends Controller
{
	
	function __construct()
	{
		var_dump("Home Controller");
	}

	public function index()
	{
		var_dump("Index Action of Home Controller");
	}
}