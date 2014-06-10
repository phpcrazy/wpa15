<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
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
		<div class="col-md-11">
			<form class="form-horizontal" role="form">
			<legend>Information in the telephone directory</legend>
				<div class="form-group">

					
					<label class="control-label col-sm-2">Name (or) Phone : </label>
					<div class="col-sm-3">
						<input type="text" name="telephone" class="form-control">
						<p class="help-block">*** without (U and Daw)</p>
					</div>

				</div>
				
				<div class="form-group">
					<div class="col-sm-offset-2">
						<div class="radio">
							<label>
								<input type="radio" name="option1" id="optionsRadios1" value="starts_with" checked>
								Starts with
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="option1" id="optionsRadios1" value="ends_with">
								Ends with
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="option1" id="optionsRadios1" value="include_in">
								Include in
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="option1" id="optionsRadios1" value="exactly_the_same">
								Exactly the same
							</label>
						</div>	
					</div>			
				</div><!-- /div.form-group -->
				<div class="form-group">
					<label for="" class="control-label col-sm-2">Category : </label>
					<div class="col-sm-3">
						<select class="form-control">
							<option selected="selected" value="">Select Category </option>
							<option value="AYARWADDY">Colleagues</option>
							<option value="BAGO - EAST">Family</option>
							<option value="BAGO - WEST">Friends</option>
							<option value="CHIN">Work</option>
						</select>					
					</div>
				</div>

				<div class="form-group">
					<label for="" class="control-label col-sm-2">Division / State : </label>
					<div class="col-sm-3">
						<select class="form-control">
							<option selected="selected" value="">Select Division - State >></option>
							<option value="AYARWADDY">AYARWADDY</option>
							<option value="BAGO - EAST">BAGO - EAST</option>
							<option value="BAGO - WEST">BAGO - WEST</option>
							<option value="CHIN">CHIN</option>
							<option value="KACHIN">KACHIN</option>
							<option value="KAYAH">KAYAH</option>
							<option value="KAYIN">KAYIN</option>
							<option value="MAGWE">MAGWE</option>
							<option value="MANDALAY">MANDALAY</option>
							<option value="MON">MON</option>
							<option value="NAYPYITAW">NAYPYITAW</option>
							<option value="RAKHINE">RAKHINE</option>
							<option value="SAGAING">SAGAING</option>
							<option value="SHAN - EAST">SHAN - EAST</option>
							<option value="SHAN - NORTH">SHAN - NORTH</option>
							<option value="SHAN - SOUTH">SHAN - SOUTH</option>
							<option value="TANINTHARYI">TANINTHARYI</option>
							<option value="YANGON">YANGON</option>
						</select>					
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-primary" name="search">Search</button>
					</div>
				</div>
			</form>
		</div>	
	</div>
</body>
</html>