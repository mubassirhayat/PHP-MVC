<?php
namespace Codecourse\Bootstrap;

class Bootstrap
{
	public function app()
	{
		$ca = NULL;
		foreach ($_GET as $key => $value)
		{
			$ca = $key;
		}

		$ca = ltrim($ca,'/');
		$ca = rtrim($ca,'/');

		$ca = explode('/', $ca);

		$actionName = DEFAULT_ACTION;
		if ($ca[0] != '')
		{
			$controllerName = DEFAULT_CONTROLLER_NAMESPACE . $ca[0] . 'Controller';
			if (isset($ca[1]))
			{
				$actionName = $ca[1];	
			}
		}
		else
		{
			$controllerName = DEFAULT_CONTROLLER_NAMESPACE . DEFAULT_CONTROLLER;
		}
		
		if ( ! class_exists($controllerName) )
		{
			$controllerName = DEFAULT_CONTROLLER_NAMESPACE . ERROR_CONTROLLER;
			$actionName = ERROR_NOT_FOUND_ACTION;
		}
		$controller = new $controllerName();
		
		if ( ! method_exists($controller, $actionName) )
		{
			$controllerName = DEFAULT_CONTROLLER_NAMESPACE . ERROR_CONTROLLER;
			$actionName = ERROR_NOT_FOUND_ACTION;
			$controller = new $controllerName();
		}
		array_shift($ca);
		array_shift($ca);

		if ( ! empty ( $ca ) ) {
			$controller->{$actionName}($ca);
		}
		else {
			$controller->{$actionName}();
		}
	}
}