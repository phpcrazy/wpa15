<?php 
// Part 1
define('DD', __DIR__ . '/../'); 
require DD . 'wpa15/Application.php';

isset($_GET['page']) ? $page = $_GET['page'] : $page = 'home';

// if(isset($page != $_GET['page'])) {
// 	$page = 'home';
// }

// if($page == 'home') {
// 	require DD . 'app/controllers/HomeController.php';
// } else if($page == 'blog') {
// 	require DD . 'app/controllers/BlogController.php';
// } else {
// 	echo "404 Not Found!";
// }

switch($page) {
	case "home":
		require DD . 'app/controllers/HomeController.php';
		break;
	case "blog":
		require DD . 'app/controllers/BlogController.php';
		break;
	case "about-us":
		require DD . 'app/controllers/AboutController.php';
		break;
	default:
		echo "404 Not Found!";
		break;
}


?>