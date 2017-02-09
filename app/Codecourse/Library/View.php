<?php
namespace Codecourse\Library;

class View
{
	
	function __construct()
	{

	}

	public function loadView($viewPath)
	{
		include_once 'app/Codecourse/Views/' . $viewPath . '.php';
	}
}