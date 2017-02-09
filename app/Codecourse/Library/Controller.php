<?php
namespace Codecourse\Library;

use Codecourse\Library\View;

class Controller
{
	public $view;

	function __construct()
	{
		$this->view = new View();
	}
}