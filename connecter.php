<!DOCTYPE html>
	<html>
		<head>
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<script src="js/jquery.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<link href="css/style.css" rel="stylesheet">		
			<link <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
			<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			<style type="text/css">
				body { background-color:#DDD; }
				
				.dropdown-submenu{position:relative;}
				.dropdown-submenu>.dropdown-menu{top:0;left:100%;margin-top:-6px;margin-left:-1px;
				-webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;}
				.dropdown-submenu:hover>.dropdown-menu{display:block;}
				.dropdown-submenu>a:after{display:block;content:" ";float:right;width:0;height:0;
				border-color:transparent;border-style:solid;border-width:5px 0 5px 5px;border-left-color:#cccccc;margin-top:5px;margin-right:-10px;}
				.dropdown-submenu:hover>a:after{border-left-color:#ffffff;}
				.dropdown-submenu.pull-left{float:none;}.dropdown-submenu.pull-left>.dropdown-menu{left:-100%;margin-left:10px;
				-webkit-border-radius:6px 0 6px 6px;-moz-border-radius:6px 0 6px 6px;border-radius:6px 0 6px 6px;}
				
			</style>
		</head>
		
		<body>
			<header  class="row header">
				<?php 
					include("header.php");
				?>
			</header>
			
			<div class="container">
				<section class="row">
					<form class="form-horizontal col-lg-6">
						<div class="form-group">
							<legend>Légende</legend>
						</div>
						<div class="row">
							<div class="form-group">
								<label for="text" class="col-lg-2 control-label">Text : </label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="text">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label for="textarea" class="col-lg-2 control-label">Textarea : </label>
								<div class="col-lg-10">
									<input type="textarea" class="form-control" id="textarea">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label for="select" class="col-lg-2 control-label">Select: </label>
								<div class="col-lg-10">
									<select id="select" class="form-control" >
										<option>Option 1</option>
										<option>Option 2</option>
										<option>Option 3</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<button class="pull-right btn btn-default">Envoyer</button>
						</div>
					</form>
				</section>
			</div>
			
			<footer>
			
			</footer>
			    <script src="js/jquery.js"></script>
				<script src="js/bootstrap.min.js"></script>
				<script>				
					$('#accueilDeroulant').mouseover(function() {
					$(this).dropdown('toggle');
					});
					$('#centreDeroulant').mouseover(function() {
					$(this).dropdown('toggle');
					});
					$('#formationDeroulant').mouseover(function() {
					$(this).dropdown('toggle');
					});
					$('#parentsDeroulant').mouseover(function() {
					$(this).dropdown('toggle');
					});
					$('#elevesDeroulant').mouseover(function() {
					$(this).dropdown('toggle');
					});
				</script>
		</body>
	</html>
			