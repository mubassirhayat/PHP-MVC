<?php
namespace Codecourse\Controllers;

use Codecourse\Library\Controller;

class ContactController extends Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->view->loadView('contact/index');
	}
}