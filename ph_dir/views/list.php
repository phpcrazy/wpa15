<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
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
			<?php include "menu2.php"; ?>
		</div>
	</header>
	<div class="container">
		<div class="col-md-9">
		<legend>Information in the telephone directory</legend>
			<table class="table table-bordered">
				<th>No</th>
				<th>Name</th>
				<th>Phone</th>
				<th>Address</th>
				<th>Photo</th>
				<th></th>
				<tr>
					<td>1</td>
					<td>Mg Mg</td>
					<td>09-1234567</td>
					<td>A-14</td>
					<td>1.jpg</td>
					<td><a href="update.php">Update</a></td>
					<td><a href="delete.php">Delete</a></td>
				</tr>
				<tr>
					<td>1</td>
					<td>Mg Mg</td>
					<td>09-1234567</td>
					<td>A-14</td>
					<td>1.jpg</td>
					<td><a href="update.php">Update</a></td>
					<td><a href="delete.php">Delete</a></td>
				</tr>
				<tr>
					<td>1</td>
					<td>Mg Mg</td>
					<td>09-1234567</td>
					<td>A-14</td>
					<td>1.jpg</td>
					<td><a href="update.php">Update</a></td>
					<td><a href="delete.php">Delete</a></td>
				</tr>
				<tr>
					<td>1</td>
					<td>Mg Mg</td>
					<td>09-1234567</td>
					<td>A-14</td>
					<td>1.jpg</td>
					<td><a href="update.php">Update</a></td>
					<td><a href="delete.php">Delete</a></td>
				</tr>
				<tr>
					<td>1</td>
					<td>Mg Mg</td>
					<td>09-1234567</td>
					<td>A-14</td>
					<td>1.jpg</td>
					<td><a href="update.php">Update</a></td>
					<td><a href="delete.php">Delete</a></td>
				</tr>

			</table>
			<ul class="pagination">
			  <li class="disabled"><a href="#">&laquo;</a></li>
			  <li class="active"><a href="#">1</a></li>
			  <li><a href="#">2</a></li>
			  <li><a href="#">3</a></li>
			  <li><a href="#">4</a></li>
			  <li><a href="#">5</a></li>
			  <li><a href="#">&raquo;</a></li>
			</ul>
		</div>
	</div>
</body>
</html>