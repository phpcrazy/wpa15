<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
		.navbar-color-yellow, .navbar-color-yellow .navbar-brand {
			color: #669900 !important;
		}
	</style>
</head>
<body>

	<header role="banner" id="top" class="navbar navbar-inverse navbar-color-yellow">
		<div class="container">
			<div class="navbar-header">
				<button data-target=".bs-navbar-collapse" data-toggle="collapse" type="button" class="navbar-toggle">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#" style="padding-top: 3px">
					<img src="img/logo.png" height="50"> Phone Directory
				</a>
			</div>
			<?php include "menu3.php"; ?>
		</div>
	</header>

	<div class="container">
		<div class="row well">
			<address>
				<strong>Twitter, Inc.</strong><br>
				795 Folsom Ave, Suite 600<br>
				San Francisco, CA 94107<br>
				<abbr title="Phone">P:</abbr> (123) 456-7890
			</address>

			<address>
				<strong>Full Name</strong><br>
				<a href="mailto:#">first.last@example.com</a><br>
				<a href="mailto:#">first.last@example.com</a><br>
				<a href="mailto:#">first.last@example.com</a><br>
				<a href="mailto:#">first.last@example.com</a><br>
				<a href="mailto:#">first.last@example.com</a>
			</address>
		</div>
	</div>
</body>
</html>