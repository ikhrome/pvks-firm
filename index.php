<?php 
$page = htmlspecialchars($_GET['page']);

switch($page) {
	case 'about':
		include "pages/about.php";
		break;
	case 'contact':
		include "pages/contact.php";
		break;
	case 'products':
		include "pages/products.php";
		break;
	default:
		include 'pages/index.php';
		break;
}