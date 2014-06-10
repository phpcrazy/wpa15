<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
	<script type="text/javascript">
	$().ready(function(){
		$( '#add-domain' ).on( 'click', function(){
			$( '#domain' ).clone( false ).find(":input").val("").insertBefore( this );
		});
	});
	</script>
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
		<form class="form-horizontal" role="form">
			<legend>Add New Information</legend>
			<div class="form-group">
				<label for="exampleInputEmail1" class="control-label col-sm-2">Name : </label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
				</div>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1" class="control-label col-sm-2">Phone</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
				</div>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1" class="control-label col-sm-2">Address : </label>
				<div class="col-sm-4">
					<textarea class="form-control" rows="3"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label for="" class="control-label col-sm-2">Category : </label>
				<div class="col-sm-4">
					<select class="form-control">
						<option selected="selected" value="">Select Category </option>
						<option value="AYARWADDY">Colleagues</option>
						<option value="BAGO - EAST">Family</option>
						<option value="BAGO - WEST">Friends</option>
						<option value="CHIN">Work</option>
					</select>					
				</div>
			</div>		
			<div class="form-group" id="domain" style="display: none;">
				<label for="" class="control-label col-sm-2">Category : </label>
				<div class="col-sm-4">					
					<input type="text" class="form-control" name="domain[]" placeholder="Category Name" value="<?php //echo flashdata( 'domain1', isset($a_client) ? $a_client->domain1 : '' ) ?>">
				</div>
			</div>
			<div class="form-group">
					<div class="col-sm-offset-2 col-sm-4">
						<button type="button" class="btn btn-success" id="add-domain">Add More Category</button>
					</div>
				</div>
				<div class="form-group">
					<label for="exampleInputFile" class="control-label col-sm-2">Photo Upload : </label>
					<div class="col-sm-4">
						<input type="file" name="photo">
						<!-- <p class="help-block">Example block-level help text here.</p> -->
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-primary" name="update">Update</button>
					</div>
				</div>
			</form>
		</div>
	</body>
	</html>