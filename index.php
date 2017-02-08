<?php
use Codecourse\Bootstrap\Bootstrap;

require_once 'app/start.php';
require_once 'config/app.php';
require_once 'config/database.php';

$bootstrap = new Bootstrap();
$bootstrap->app();
