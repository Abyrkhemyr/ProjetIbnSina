
			<!--<header  class="row header">-->
			<div class="row logo">
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<img src="images/logo.jpg" class="pull-left"/>
				</div>
				<span class="col-xs-4 col-sm-4  col-md-4 col-lg-4 nomAssociation ">ASSOCIATION IBNOU SINA </span>
				<div class="col-xs-4 col-sm-4  col-md-4 col-lg-4 zoneDeRecherche">				
					<form class="form-inline pull-right">
						<input type="text" style="width:150px" class="input-sm form-control" placeholder="Recherche">
				
						<button type="submit" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Chercher</button>
					</form>
				</div>
			</div>
			
			<div class="row" >
				<div class="clearfix visible-xs-block"></div><!-- évitement de recouvrement et visibilité sur écran smartphone -->
				<nav class="col-sm-12 col-lg-12 navbar-inverse">
					<div class="container-fluid">
						<ul class="nav navbar-nav">
							<li class="dropdown"> 
								<a id="accueilDeroulant" data-toggle="dropdown" href="index.php">ACCUEIL</a>
								<ul class="dropdown-menu">
									<li><a  href="index.php">ACTUALITES</a></li>
									<li><a  href="#">LOI DE CREATION</a></li>
									<li><a  href="#">ORGANIGRAMME</a></li>									
								</ul>
							</li>
							<li class="dropdown"> 
								<a id="centreDeroulant" data-toggle="dropdown" href="#">CENTRES</a>
								<ul class="dropdown-menu">
									<li class="dropdown-submenu">
										<a tabindex="-1" href="#">ERRAHMA</a>
										<ul class="dropdown-menu">
											<li><a tabindex="-1" href="#">SES OBJECTIFS</a></li>
											<li><a href="#">SON EQUIPE</a></li>
											<li><a href="#">SES ACTIVITES</a></li>
										</ul>
									</li>
									<li class="dropdown-submenu">
										<a tabindex="-1" href="#">ERRAIHAN</a>
										<ul class="dropdown-menu">
											<li><a tabindex="-1" href="#">SES OBJECTIFS</a></li>
											<li><a href="#">SON EQUIPE</a></li>
											<li><a href="#">SES ACTIVITES</a></li>
										</ul>
									</li>
									<li class="dropdown-submenu">
										<a tabindex="-1" href="#">DAR EL ATFEL</a>
										<ul class="dropdown-menu">
											<li><a tabindex="-1" href="#">SES OBJECTIFS</a></li>
											<li><a href="#">SON EQUIPE</a></li>
											<li><a href="#">SES ACTIVITES</a></li>
										</ul>
									</li>
									<li class="dropdown-submenu">
										<a tabindex="-1" href="#">IBNOU SINA</a>
										<ul class="dropdown-menu">
											<li><a tabindex="-1" href="#">SES OBJECTIFS</a></li>
											<li><a href="#">SON EQUIPE</a></li>
											<li><a href="#">SES ACTIVITES</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="dropdown"> 
								<a id="formationDeroulant" data-toggle="dropdown" href="#">FORMATIONS</a>
								<ul class="dropdown-menu">
									<li><a  href="#">NIVEAU1</a></li>
									<li><a  href="#">NIVEAU2</a></li>
									<li><a  href="#">NIVEAU3</a></li>									
								</ul>
							</li>
							<li class="dropdown"> 
								<a id="parentsDeroulant" data-toggle="dropdown" href="#">ESPACE PARENTS</a>
								<ul class="dropdown-menu">
									<li><a  href="#">INSCRIRE ELEVES</a></li>
									<li><a  href="#">SUIVRE ELEVES</a></li>
									<li><a  href="#">SIGNALER UN COMPORTEMENT</a></li>									
								</ul>
							</li>
							<li> <a  data-toggle="dropdown" href="#">ACTIVITES</a></li>				
							<li> <a href="#">GALERIES</a> </li>
							<li> <a href="contact.php">CONTACT</a> </li>
							<li> <a  href="inscription.php" >S'INSCRIRE</a> </li>	
							<li> <a  data-toggle="modal" data-backdrop="false" href="#formulaire" id="html" >SE CONNECTER</a> </li>
							<div class="modal fade" id="formulaire">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">x</button>
											<h4 class="modal-title">remplissez les champs :</h4>
										</div>
										<div class="modal-body">
											<form action="connecter.php">
												<div class="form-group">
													<label for="email">Email</label>
													<input type="email" class="form-control" name="email" id="email" placeholder="Votre Email">
												</div>
												<div class="form-group">
													<label for="nom">mot de passe</label>
													<input type="text" class="form-control" name ="nom" id="nom" placeholder="Votre mot de passe">
												</div>
												
												<button type="submit" class="btn btn-default">se connecter</button>
											</form>
										</div>
										<div class="modal-footer">
											<button class="btn btn-info" data-dismiss="modal">Annuler</button>
										</div>
									</div>
								</div>
							</div>			
						</ul>
					</div>		
				</nav> 
			</div>
		
			<!-- image défilante -->
			<div class="row monCaroussel">
				<div id="my_carousel" class="carousel slide col-xs-12 col-sm-12 col-md-12 col-lg-12" data-ride="carousel">
					<!-- Bulles -->
					<ol class="carousel-indicators">
						<li data-target="#my_carousel" data-slide-to="0" class="active"></li>
						<li data-target="#my_carousel" data-slide-to="1"></li>
						<li data-target="#my_carousel" data-slide-to="2"></li>
					</ol>
					<!-- Slides -->
					<div class="carousel-inner">
						<!-- Page 1 -->
						<div class="item active">  
							<div class="carousel-page">
								<img src="images/imgCarroussel1.jpg" class="img-responsive" style="margin:0px auto;" />
							</div> 
							<div class="carousel-caption">Page 1 de présentation</div>
						</div>   
						<!-- Page 2 -->
						<div class="item"> 
							<div class="carousel-page">
								<img src="images/imgCarroussel2.jpg" class="img-responsive img-rounded"style="margin:0px auto;"/>
							</div>  			
							<div class="carousel-caption">Page 2 de présentation</div>
						</div>  
						<!-- Page 3 -->
						<div class="item">  
							<div class="carousel-page">
								<img src="images/imgCarroussel3.jpg" class="img-responsive img-rounded" style="margin:0px auto;max-height:100%;"  />					
							</div>  
							<div class="carousel-caption">Page 3 de présentation</div>
						</div>     
					</div>
					<!-- Contrôles -->
					<a class="left carousel-control" href="#my_carousel" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#my_carousel" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>	
			</div>
			<!--</header>-->
		
			