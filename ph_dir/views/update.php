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
			<form class="form-horizontal" role="form">
				<legend>Update your Information</legend>
				<div class="form-group">
					<label for="exampleInputEmail1" class="control-label col-sm-2">Name : </label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="Mg Mg">
					</div>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1" class="control-label col-sm-2">Phone</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="09-1234567">
					</div>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1" class="control-label col-sm-2">Address : </label>
					<div class="col-sm-6">
						<textarea class="form-control" rows="3">A-14</textarea>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-2">Category : </label>
					<div class="col-sm-4">
						<select class="form-control">
							<option selected="selected" value="">Select Category </option>
							<option value="AYARWADDY">Colleagues</option>
							<option value="BAGO - EAST" selected>Family</option>
							<option value="BAGO - WEST">Friends</option>
							<option value="CHIN">Work</option>
						</select>					
					</div>
				</div>		
				<div class="form-group">
					<label for="exampleInputFile" class="control-label col-sm-2">Photo Upload : </label>
					<div class="col-sm-6">
						<input type="file" name="photo">
						<!-- <p class="help-block">Example block-level help text here.</p> -->
					</div>
				</div>
				<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary" name="update">Update</button>
				</div>
			</form>
		</div>	
	</div>
</body>
</html>