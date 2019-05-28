<?php
ob_start();
require 'functions.php';
$routes = require_once 'routes.php';
$action = isset($_GET['route']) ? htmlspecialchars($_REQUEST['route']) : null;

if(empty($action) || $action == null) {
	include 'pages/index.php';
} elseif(isset($routes[$action])) {
	include $routes[$action] . ".php";
} else {
	include "pages/404.php";
}

ob_end_flush();
