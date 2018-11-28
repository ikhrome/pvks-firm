<?php
ob_start();
require 'functions.php';
$routes = require_once 'routes.php';
$page = htmlspecialchars($_REQUEST['page']);

if($page == '' || $page == null) {
	include 'pages/index.php';
} elseif(isset($routes[$page])) {
	include $routes[$page] . ".php";
} else {
	include "pages/404.php";
}

ob_end_flush();