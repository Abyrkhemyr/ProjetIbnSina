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
					include("headerAdmin.php");
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
					 
							<form class="form-horizontal col-sm-9 col-md-9 col-lg-9 col-xs-9 inscriForm" id="formAjouterPersonnel" name="formAjouterPersonnel" method="POST" action="ajouterPersonnel.php" >
								<div class="form-group">
									<legend>veillez remplir les champs pour vous inscrire</legend>
								</div>
								<div class="row">
									<div class="form-group">
										<label for="nom" class="col-lg-2 control-label">nom : </label>
										<div class="col-lg-7">
											<input type="text" class="form-control" id="nomPersonnel" name="nomPersonnel" class="champ"/>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<label for="prenom" class="col-lg-2 control-label">prenom : </label>
										<div class="col-lg-7">
											<input type="text" class="form-control" id="prenom" name="prenom" class="champ"/>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<label for="text" class="col-lg-2 control-label">sexe : </label>
										<div class="col-lg-7">
											<div class="radio">
												<label for="masculin" class="radio" >
													<input type="radio" name="sexe" value="masculin" id="masculin"  checked="checked"/>
													masculin
												</label>
											</div>
											<div class="radio" >
												<label for="feminin" class="radio" >
													<input type="radio" name="sexe" value="feminin" id="feminin"/>
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
											<input type="email" class="form-control" id="mail" name="mail" class="champ"/>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<label for="ddn" class="col-lg-2 control-label">date de naissance : </label>
										<div class="col-lg-7">
											<input type="date" class="form-control" id="ddn" name="ddn" class="champ"/>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<label for="motdepasse" class="col-lg-2 control-label">confirmer password : </label>
										<div class="col-lg-7">
											<input type="password" class="form-control" id="motdepasse" name="motdepasse" class="champ"/>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<label for="motdepasse" class="col-lg-2 control-label">confirmer password : </label>
										<div class="col-lg-7">
											<input type="password" class="form-control" id="motdepasse2" name="motdepasse2" class="champ"/>
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
										<button class="col-lg-offset-2 col-lg-2 btn btn-danger" type="reset" id="annuler"><span class="glyphicon"></span>annuler</button>
										<button class="col-lg-offset-3   col-lg-2  btn btn-primary" type="submit" id="envoyer"><span class="glyphicon glyphicon-ok-sign"></span>Envoyer</button>
									</div>
								</div>
								<div class="row">
									<div class="alert alert-block alert-danger" id="erreur" style="display:none">
										<h4>Erreur !</h4>
										Vous devez remplir corretement tous les champs! 
									</div>
								</div>
							</form>
							<?php 
						
						//si on envoie le formulaire
						if(isset($_POST['nomPersonnel']))
						{
							
							//si les champs ne sont pas vide
							if(!empty($_POST['nomPersonnel'])&& !empty($_POST['prenom'])&& !empty($_POST['mail'])&& !empty($_POST['motdepasse']) && !empty($_POST['motdepasse2'])&& !empty($_POST['ddn']))
							{	
								
								$email = $_POST['mail'];
								$pswd = $_POST['motdepasse'];
								$pswd2 = $_POST['motdepasse2'];
								//si les mots de passe correspondent 
								if($pswd==$pswd2)
								{
								
									//si l'email est valide
									if(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $mail))
									{
										include("myconnexion.php");
										$bdd = connexion();
										$nom = $_POST['nomPersonnel'];
										$prenom = $_POST['prenom'];
										$ddn = $_POST['ddn'];
										$reponse = $bdd->query("SELECT * FROM personnel WHERE emailPersonnel='".$email.'");
										$donnees = $reponse->fetch();
										if($donnees!=null)//si données correcte: on ouvre sa session
										{
										 
										}
									}
									else
									{
										?>
										<p style="color:red; font-size:25px;font-weight:bold;"> erreur d'envoie!!! l'email n'est pas valide </p>
										<script >
											alert("erreur d'envoie!!! l'email n'est pas valide ");
										</script>
										
										<?php
									}
								}
								else
								{
									?>
									 
									<script >
											alert("erreur d'envoie!!! les mots de passe doivent correspondre");
									</script>
									<?php
								}
							}
							else
							{
								?>
								
								<script >
									alert("erreur d'envoie!!! remplissez tous les champs ");
								</script>
							<?php	
							}
							
							 
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
			<!-- menu deroulant -->
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
	
			
			<!-- verification des champs du formulaires-->
			<script>

				$(document).ready(function(){
    
					
					var $nom = $('#nomPersonnel');
					var	$prenom = $('#prenom');
					var	$ddn = $('#ddn');
					var	$email = $('#mail');
					var	$mdp = $('#motdepasse');
					var	$mdp2 = $('#motdepasse2');
					var	$envoi = $('#envoyer');
					var	$reset = $('#annuler');
					var	$erreur = $('#erreur');
					var	$champ = $('.champ');
					
					
					$nom.keyup(function(){
						if($(this).val().length < 3){ // si la chaîne de caractères est inférieure à 5
							$(this).css({ // on rend le champ rouge
								borderColor : 'red',
							color : 'red'
							});
						 }
						 else{
							 $(this).css({ // si tout est bon, on le rend vert
							 borderColor : 'green',
							 color : 'green'
						 });
						 }
					});
					
					$prenom.keyup(function(){
						if($(this).val().length < 3){ // si la chaîne de caractères est inférieure à 5
							$(this).css({ // on rend le champ rouge
								borderColor : 'red',
							color : 'red'
							});
						 }
						 else{
							 $(this).css({ // si tout est bon, on le rend vert
							 borderColor : 'green',
							 color : 'green'
						 });
						 }
					});
					 /*
					$email.keyup(function(){
						var $emailReg = /^[A-Z0-9][A-Z0-9._%+-]{0,63}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/;
						if(!($emailReg.test($email))){ // si l'email n'est pas correcte
							$(this).css({ // on rend le champ rouge
								borderColor : 'red',
							color : 'red'
							});
						 }
						 else{
							 $(this).css({ // si tout est bon, on le rend vert
							 borderColor : 'green',
							 color : 'green'
						 });
						 }
					});
					
					$ddn.keyup(function(){
						var dateformat = /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;
						if(!($ddn.match(dateformat))){ // si la chaîne de caractères est inférieure à 5
							$(this).css({ // on rend le champ rouge
								borderColor : 'red',
							color : 'red'
							});
						 }
						 else{
							 $(this).css({ // si tout est bon, on le rend vert
							 borderColor : 'green',
							 color : 'green'
						 });
						 }
					});*/
					$mdp.keyup(function(){
						if($(this).val().length < 5){ // si la chaîne de caractères est inférieure à 5
							$(this).css({ // on rend le champ rouge
								borderColor : 'red',
							color : 'red'
							});
						 }
						 else{
							 $(this).css({ // si tout est bon, on le rend vert
							 borderColor : 'green',
							 color : 'green'
						 });
						 }
					});

					$mdp2.keyup(function(){
						if($(this).val() != $mdp.val()){ // si la confirmation est différente du mot de passe
							$(this).css({ // on rend le champ rouge
								borderColor : 'red',
							color : 'red'
							});
						}
						else{
						$(this).css({ // si tout est bon, on le rend vert
							borderColor : 'green',
							color : 'green'
						});
						}
					});
					
				
					/*
					function verifier(champ){
						if(champ.val() == ""){ // si le champ est vide
							$erreur.css('display', 'block'); // on affiche le message d'erreur
							champ.css({ // on rend le champ rouge
								borderColor : 'red',
								color : 'red'
							});
						}
					}

					$envoi.click(function(e){
						e.preventDefault(); // on annule la fonction par défaut du bouton d'envoi

						// puis on lance la fonction de vérification sur tous les champs :
						verifier($nom);
						verifier($prenom);
						verifier($mdp);
						verifier($mdp2);
						verifier($mail);
						
					});

					
					$reset.click(function(){
						$champ.css({ // on remet le style des champs comme on l'avait défini dans le style CSS
							borderColor : '#ccc',
							color : '#555'
						});
						$erreur.css('display', 'none'); // on prend soin de cacher le message d'erreur
					});

					*/

				});

				
				
			</script>
			
		</body>
	</html>
			