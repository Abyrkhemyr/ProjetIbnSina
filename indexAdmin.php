<!DOCTYPE html>
	<html>
		<head>
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<script src="js/jquery.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<link href="css/style.css" rel="stylesheet">	
			<link href="fontAwesom/css/fontawesome-all.css" rel="stylesheet">	
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
			<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			<style type="text/css">
				body { background-color:#DDD; }
				<!-- css pour le menu déroulant -->
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
			<header  class="row header" style=" position:relative; top:0px;">
				<?php 
					include("headerAdmin.php");
				?>
			</header>
			
			<div class="container">		
				<!-- menu de gauche -->
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
					<!-- actualités --> 
					<div class="col-sm-9 col-md-9 acutalites"  >
						<div>
							<p style="color:rgb(60,165,196); font-size:20px; font-weight:bold; margin-top:10px;">toutes les dernières ACTUALITES en direct</p>
						</div>
						<div id="content">
							<div  style="border-bottom: 1px black solid; margin-bottom:10px;">
								<blockquote class="row">
									<img src="images/logo.jpg"  class="col-md-3 col-sm-3 col-xs-3 col-lg-3" style="height:40px; width:80px;"/>
									<p  class="col-md-9 col-sm-9 col-xs-9 col-lg-9" style="size:20px; font-weight:bold; color:green;">1er Mai 2018</p>							 
									<p class="col-md-9 col-sm-9 col-xs-9 col-lg-9" >description acutalite1</p>
									<p class="col-md-3 col-sm-3 col-xs-3 col-lg-3" >
										<a href="#" class="btn btn-info"><span class="glyphicon glyphicon-list-alt"  ></span>details</a>
									</p>	 		
								</blockquote>
							</div>
							<div  style="border-bottom: 1px black solid; margin-bottom:10px;">
								<blockquote class="row">
									<img src="images/logo.jpg"  class="col-md-3 col-sm-3 col-xs-3 col-lg-3" style="height:40px; width:80px;"/>
									<p  class="col-md-9 col-sm-9 col-xs-9 col-lg-9" style="size:20px; font-weight:bold; color:green;">1er Mai 2018</p>							 
									<p class="col-md-9 col-sm-9 col-xs-9 col-lg-9" >description acutalite2</p>
									<p class="col-md-3 col-sm-3 col-xs-3 col-lg-3" >
										<a href="#" class="btn btn-info"><span class="glyphicon glyphicon-list-alt"  ></span>details</a>
									</p>	 		
								</blockquote>
							</div>
							<div  style="border-bottom: 1px black solid; margin-bottom:10px;">
								<blockquote class="row">
									<img src="images/logo.jpg"  class="col-md-3 col-sm-3 col-xs-3 col-lg-3" style="height:40px; width:80px;"/>
									<p  class="col-md-9 col-sm-9 col-xs-9 col-lg-9" style="size:20px; font-weight:bold; color:green;">1er Mai 2018</p>							 
									<p class="col-md-9 col-sm-9 col-xs-9 col-lg-9" >description acutalite1</p>
									<p class="col-md-3 col-sm-3 col-xs-3 col-lg-3" >
										<a href="#" class="btn btn-info"><span class="glyphicon glyphicon-list-alt"  ></span>details</a>
									</p>	 		
								</blockquote>
							</div>
							<div  style="border-bottom: 1px black solid; margin-bottom:10px;">
								<blockquote class="row">
									<img src="images/logo.jpg"  class="col-md-3 col-sm-3 col-xs-3 col-lg-3" style="height:40px; width:80px;"/>
									<p  class="col-md-9 col-sm-9 col-xs-9 col-lg-9" style="size:20px; font-weight:bold; color:green;">1er Mai 2018</p>							 
									<p class="col-md-9 col-sm-9 col-xs-9 col-lg-9" >description acutalite1</p>
									<p class="col-md-3 col-sm-3 col-xs-3 col-lg-3" >
										<a href="#" class="btn btn-info"><span class="glyphicon glyphicon-list-alt"  ></span>details</a>
									</p>	 		
								</blockquote>
							</div>
							<div  style="border-bottom: 1px black solid; margin-bottom:10px;">
								<blockquote class="row">
									<img src="images/logo.jpg"  class="col-md-3 col-sm-3 col-xs-3 col-lg-3" style="height:40px; width:80px;"/>
									<p  class="col-md-9 col-sm-9 col-xs-9 col-lg-9" style="size:20px; font-weight:bold; color:green;">1er Mai 2018</p>							 
									<p class="col-md-9 col-sm-9 col-xs-9 col-lg-9" >description acutalite1</p>
									<p class="col-md-3 col-sm-3 col-xs-3 col-lg-3" >
										<a href="#" class="btn btn-info"><span class="glyphicon glyphicon-list-alt"  ></span>details</a>
									</p>	 		
								</blockquote>
							</div>
							<div  style="border-bottom: 1px black solid; margin-bottom:10px;">
								<blockquote class="row">
									<img src="images/logo.jpg"  class="col-md-3 col-sm-3 col-xs-3 col-lg-3" style="height:40px; width:80px;"/>
									<p  class="col-md-9 col-sm-9 col-xs-9 col-lg-9" style="size:20px; font-weight:bold; color:green;">2 Mai 2018</p>							 
									<p class="col-md-9 col-sm-9 col-xs-9 col-lg-9" >description acutalite1</p>
									<p class="col-md-3 col-sm-3 col-xs-3 col-lg-3" >
										<a href="#" class="btn btn-info"><span class="glyphicon glyphicon-list-alt"  ></span>details</a>
									</p>	 		
								</blockquote>
							</div>
							<div  style="border-bottom: 1px black solid; margin-bottom:10px;">
								<blockquote class="row">
									<img src="images/logo.jpg"  class="col-md-3 col-sm-3 col-xs-3 col-lg-3" style="height:40px; width:80px;"/>
									<p  class="col-md-9 col-sm-9 col-xs-9 col-lg-9" style="size:20px; font-weight:bold; color:green;">2 Mai 2018</p>							 
									<p class="col-md-9 col-sm-9 col-xs-9 col-lg-9" >description acutalite1</p>
									<p class="col-md-3 col-sm-3 col-xs-3 col-lg-3" >
										<a href="#" class="btn btn-info"><span class="glyphicon glyphicon-list-alt"  ></span>details</a>
									</p>	 		
								</blockquote>
							</div>
							<div  style="border-bottom: 1px black solid; margin-bottom:10px;">
								<blockquote class="row">
									<img src="images/logo.jpg"  class="col-md-3 col-sm-3 col-xs-3 col-lg-3" style="height:40px; width:80px;"/>
									<p  class="col-md-9 col-sm-9 col-xs-9 col-lg-9" style="size:20px; font-weight:bold; color:green;">2 Mai 2018</p>							 
									<p class="col-md-9 col-sm-9 col-xs-9 col-lg-9" >description acutalite1</p>
									<p class="col-md-3 col-sm-3 col-xs-3 col-lg-3" >
										<a href="#" class="btn btn-info"><span class="glyphicon glyphicon-list-alt"  ></span>details</a>
									</p>	 		
								</blockquote>
							</div>
							<div  style="border-bottom: 1px black solid; margin-bottom:10px;">
								<blockquote class="row">
									<img src="images/logo.jpg"  class="col-md-3 col-sm-3 col-xs-3 col-lg-3" style="height:40px; width:80px;"/>
									<p  class="col-md-9 col-sm-9 col-xs-9 col-lg-9" style="size:20px; font-weight:bold; color:green;">2 Mai 2018</p>							 
									<p class="col-md-9 col-sm-9 col-xs-9 col-lg-9" >description acutalite1</p>
									<p class="col-md-3 col-sm-3 col-xs-3 col-lg-3" >
										<a href="#" class="btn btn-info"><span class="glyphicon glyphicon-list-alt"  ></span>details</a>
									</p>	 		
								</blockquote>
							</div>
							<div  style="border-bottom: 1px black solid; margin-bottom:10px;">
								<blockquote class="row">
									<img src="images/logo.jpg"  class="col-md-3 col-sm-3 col-xs-3 col-lg-3" style="height:40px; width:80px;"/>
									<p  class="col-md-9 col-sm-9 col-xs-9 col-lg-9" style="size:20px; font-weight:bold; color:green;">2 Mai 2018</p>							 
									<p class="col-md-9 col-sm-9 col-xs-9 col-lg-9" >description acutalite1</p>
									<p class="col-md-3 col-sm-3 col-xs-3 col-lg-3" >
										<a href="#" class="btn btn-info"><span class="glyphicon glyphicon-list-alt"  ></span>details</a>
									</p>	 		
								</blockquote>
							</div>
							<div  style="border-bottom: 1px black solid; margin-bottom:10px;">
								<blockquote class="row">
									<img src="images/logo.jpg"  class="col-md-3 col-sm-3 col-xs-3 col-lg-3" style="height:40px; width:80px;"/>
									<p  class="col-md-9 col-sm-9 col-xs-9 col-lg-9" style="size:20px; font-weight:bold; color:green;">3 Mai 2018</p>							 
									<p class="col-md-9 col-sm-9 col-xs-9 col-lg-9" >description acutalite1</p>
									<p class="col-md-3 col-sm-3 col-xs-3 col-lg-3" >
										<a href="#" class="btn btn-info"><span class="glyphicon glyphicon-list-alt"  ></span>details</a>
									</p>	 		
								</blockquote>
							</div>
						</div>
						
						<div id="page_navigation"> </div>
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
				<!-- pour les menu déroulant-->
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
					$('#activitesDeroulant').mouseover(function() {
					$(this).dropdown('toggle');
					});
					
				</script>
				<!-- pagination -->
				<script> 
					var show_per_page = 5; 
					var current_page = 0;

					function set_display(first, last) {
					  $('#content').children().css('display', 'none');
					  $('#content').children().slice(first, last).css('display', 'block');
					}

					function previous(){
						if($('.active').prev('.page_link').length) go_to_page(current_page - 1);
					}

					function next(){
						if($('.active').next('.page_link').length) go_to_page(current_page + 1);
					}

					function go_to_page(page_num){
					  current_page = page_num;
					  start_from = current_page * show_per_page;
					  end_on = start_from + show_per_page;
					  set_display(start_from, end_on);
					  $('.active').removeClass('active');
					  $('#id' + page_num).addClass('active');
					}  

					$(document).ready(function() {

					  var number_of_pages = Math.ceil($('#content').children().length / show_per_page);
					  
					  var nav = '<ul class="pagination"><li><a href="javascript:previous();">&laquo;</a>';

					  var i = -1;
					  while(number_of_pages > ++i){
						nav += '<li class="page_link'
						if(!i) nav += ' active';
						nav += '" id="id' + i +'">';
						nav += '<a href="javascript:go_to_page(' + i +')">'+ (i + 1) +'</a>';
					  }
					  nav += '<li><a href="javascript:next();">&raquo;</a></ul>';

					  $('#page_navigation').html(nav);
					  set_display(0, show_per_page);
					  
					});
			</script>

				
		</body>
	</html>
				