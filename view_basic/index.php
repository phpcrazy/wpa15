<?php 

if(isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = 'home';
}

if($page == 'home') {
	require "views/home.php";	
} elseif($page == 'blog') {
	require "views/blog.php";
} elseif($page == 'page') {
	require "views/page.php";
} else {
	echo "404";
}


 ?>