<?php 
// Part 1
define('DD', __DIR__ . '/../'); 
require DD . 'wpa15/Application.php';
require DD . 'app/ControllerLoader.php';

isset($_GET['page']) ? $page = $_GET['page'] : $page = 'home';

$routes = include DD . 'app/routes.php';

$found = -1;

foreach($routes as $key => $value) {
	if($page == $value['_route']) {
		$found = $key;
	} 
}

if($found == -1) {
	echo "404 Not Found!";
} else {
	call_user_func($routes[$found]['_controller']);
}

// call_user_func();


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



// $routes = array(
// 	'home'	=> array(
// 		'_controller'	=> 'HomeController'
// 		),
// 	'blog'	=> array(
// 		'_controller'	=> 'BlogController'
// 		)
// 	);


// switch($page) {
// 	case "home":
// 		require DD . 'app/controllers/HomeController.php';
// 		break;
// 	case "blog":
// 		require DD . 'app/controllers/BlogController.php';
// 		break;
// 	case "about-us":
// 		require DD . 'app/controllers/AboutController.php';
// 		break;
// 	default:
// 		echo "404 Not Found!";
// 		break;
// }


?>