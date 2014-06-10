<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
		<div class="col-md-8">
			<form class="form-horizontal" role="form">
				<div class="form-group">
				<legend class="login">Login Form</legend>
					<label for="exampleInputEmail1" class="control-label col-sm-2">Email : </label>
					<div class="col-sm-4">
						<input type="email" class="form-control" name="email" placeholder="Enter email">
					</div>					
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1" class="control-label col-sm-2">Password : </label>
					<div class="col-sm-4">
						<input type="password" class="form-control" name="password" placeholder="Password">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-primary" name="login">Login</button>
					</div>
				</div>				
			</form>
		</div>	
	</div>
</body>
</html>