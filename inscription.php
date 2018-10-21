<!DOCTYPE html>
	<html>
		<head>
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
		
		<body>
			<header  class="row header">
				<?php 
					include("header.php");
				?>
			</header>
			
			<div class="container">		
				<div class="row">				
					<div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
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
					<?php 
					
						if(!isset($_SESSION['nom_session']) && !isset($_SESSION['prenom_session']))
						{
							?>
							<form class="form-horizontal col-sm-9 col-md-9 col-lg-9 col-xs-9 inscriForm" method="POST" action="inscription.php">
								<div class="form-group">
									<legend>veillez remplir les champs pour vous inscrire</legend>
								</div>
								<div class="row">
									<div class="form-group">
										<label for="nom" class="col-lg-2 control-label">nom : </label>
										<div class="col-lg-7">
											<input type="text" class="form-control" id="nom" name="nom">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<label for="prenom" class="col-lg-2 control-label">prenom : </label>
										<div class="col-lg-7">
											<input type="text" class="form-control" id="prenom" name="prenom">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<label for="text" class="col-lg-2 control-label">sexe : </label>
										<div class="col-lg-7">
											<div class="radio">
												<label for="masculin" class="radio" >
													<input type="radio" name="sexe" value="masculin" id="masculin" >
													masculin
												</label>
											</div>
											<div class="radio" >
												<label for="feminin" class="radio" >
													<input type="radio" name="sexe" value="feminin" id="feminin">
													feminin
												</label>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<label for="email" class="col-lg-2 control-label">email : </label>
										<div class="col-lg-7">
											<input type="email" class="form-control" id="email">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<label for="motdepasse" class="col-lg-2 control-label">confirmer password : </label>
										<div class="col-lg-7">
											<input type="text" class="form-control" id="motdepasse" name="motdepasse">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<label for="motdepasse" class="col-lg-2 control-label">confirmer password : </label>
										<div class="col-lg-7">
											<input type="text" class="form-control" id="motdepasse" name="motdepasse">
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="form-group">
										<label for="select" class="col-lg-2 control-label">grade: </label>
										<div class="col-lg-7">
											<select id="select" class="form-control" name="grade" >
												<option value="chef centre">chef du centre</option>
												<option value="secretaire">secretaire</option>
												<option value="GRH">GRH</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<button class="col-lg-offset-2 col-lg-2 btn btn-danger" type="reset"><span class="glyphicon"></span>annuler</button>
										<button class="col-lg-offset-3   col-lg-2  btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok-sign"></span>Envoyer</button>
									</div>
								</div>
							</form>
							<?php 
						}
						else
						{
								echo"hello";
							if(isset($_POST['nom'])&&isset($_POST['prenom'])&&isset($_POST['sexe'])&&isset($_POST['email'])&&isset($_POST['motdepasse']))
							{
								include("myconnexion.php");
								$bdd = connexion();
								echo"connexion reussie";
								$_SESSION['nom_session']=$_POST['nom'];
								$_SESSION['prenom_session']=$_POST['prenom'];
								$email = $_POST['identifiant'];
								$pswd = $_POST['motdepasse'];
								$reponse = $bdd->query("SELECT * FROM utilisateur WHERE identifiant='".$ident."'AND password='".$pswd."'");
								$donnees = $reponse->fetch();
								if($donnees!=null)//si données correcte: on ouvre sa session
								{
									$_SESSION['nom_session'] = $donnees['nom'];
									$_SESSION['prenom_session'] = $donnees['prenom'];
								}
							}
							
							echo"<p> vous etes déjà connecté</p>";
							echo"<p> nom : ".$_SESSION['nom_session']."	<br/> prenom: ".$_SESSION['prenom_session']."</p>";
						}
						?>
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
			