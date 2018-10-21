 <?php
	 session_start();
	 require('GoogleMapAPI.class.php');
	//(2) On crée une nouvelle carte; Ici, notre carte sera $map.
	$map = new GoogleMapAPI('map');
	
	//(3) On ajoute la clef de Google Maps.
	$map->setAPIKey('AIzaSyBWqyy81_mKjVduZnNLOTaLWK_Tb0eZaMo');
	
	//(4) On ajoute les caractéristiques que l'on désire à notre carte.
	$map->setWidth("800px");
	$map->setHeight("500px");
	$map->setCenterCoords ('10.766163', '34.747847');
	$map->enableMapControls(); 
	$map->setZoomLevel (15);
	$map->enableZoomEncompass();
	$map->setMapType('hybrid');
	$map->addMarkerByCoords('10.766163','34.747847','votre position','','cliquer ici');
	// $map->addPolyLineByAddress( '10.76141', '34.85024','10.76115', ' 34.77557', "#ff0000", 2,0.8);
	// $map->addPolyLineByAddress( "bab jebli", "cité el ons sfax", "#ff0000", 1, 0.8);
	
 ?>
 <!--(5) On applique la base XHTML avec les fonctions à appliquer ainsi que le onload du body. -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html  xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
		<head>
			<?php 
				$map->printHeaderJS(); 
				$map->printMapJS();
			?>
			<meta charset="utf-8" />
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<script src="js/jquery.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<link href="css/style.css" rel="stylesheet">	
			<link href="fontAwesom/css/fontawesome-all.css" rel="stylesheet">			
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
		
		<body  onload="onLoad();">
			<header  class="row header">
				<?php 
					include("header.php");
				?>
			</header>
			
			<div class="container">
				<div class="row">				
					<div class="col-sm-3 col-md-3">
						<div class="panel-group menuGauche" id="accordion">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
										</span>accueil</a>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in">
									<div class="panel-body">
										<table class="table">
											<tr>
												<td>
													<span class="glyphicon glyphicon-pencil text-primary"></span><a href="">actualités</a>
												</td>
											</tr>
											<tr>
												<td>
													<span class="glyphicon glyphicon-flash text-success"></span><a href="">loi de création</a>
												</td>
											</tr>
											<tr>
												<td>
													<span class="glyphicon glyphicon-file text-info"></span><a href="">organigramme</a>
												</td>
											</tr>
										</table>
									</div>
								</div>		
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
										</span>centres</a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse">
									<div class="panel-body">
										<table class="table">
											<tr>
												<td>
													<a href="">errahma</a> <span class="label label-success"></span>
												</td>
											</tr>
											<tr>
												<td>
													<a href="">errached</a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="">dar el aftel</a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="">ibnou sina</a>
												</td>
											</tr>
										</table>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-user">
										</span>espace parent</a>
									</h4>
								</div>
								<div id="collapseThree" class="panel-collapse collapse">
									<div class="panel-body">
										<table class="table">
											<tr>
												<td>
													<a href="">inscrire élève</a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="">suivre élève</a> <span class="label label-info">5</span>
												</td>
											</tr>
											<tr>
												<td>
													<a href="">signaler un comportement</a>
												</td>
											</tr>
										</table>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-file">
										</span>autres</a>
									</h4>
								</div>
								<div id="collapseFour" class="panel-collapse collapse">
									<div class="panel-body">
										<table class="table">
											<tr>
												<td>
													<span class="glyphicon glyphicon-usd"></span><a href="">activités</a>
												</td>
											</tr>
											<tr>
												<td>
													<span class="glyphicon glyphicon-user"></span><a href="">calendrier annuel</a>
												</td>
											</tr>
											<tr>
												<td>
													<span class="glyphicon glyphicon-tasks"></span><a href="">galeries</a>
												</td>
											</tr>
											<tr>
												<td>
													<span class="glyphicon glyphicon-shopping-cart"></span><a href="">Shopping Cart</a>
												</td>
											</tr>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-8 col-md-8 mapContact">
						<p style="color:blue; font-size:22px; ">utiliser google maps pour nous retrouver</p>
						<?php 			
							$map->printMap(); 
						?>
					</div>
				</div>
			</div>
			
			<footer>
				<?php
					include("footer.php");
				?>
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
			