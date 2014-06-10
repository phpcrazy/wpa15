<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home Page</title>
</head>
<body>
	<!-- ul#menu>li*3>a[href="#"] -->
	<ul id="menu">
		<li><a href="index.php">Home</a></li>
		<li><a href="index.php?page=about">About</a></li>
		<li><a href="index.php?page=contact">Contact</a></li>
	</ul>
	<?php 
	/*
	* Very basic security measure to ensure
	* the page variable has been passed, enabling you to
	* ward off very basic mischief using htmlentities()
	*/
	if(isset($_GET['page'])) {
		$page = htmlentities($_GET['page']);
	} else {
		$page = NULL;
	}

	 ?>
</body>
</html>