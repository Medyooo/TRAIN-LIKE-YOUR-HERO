
					<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>TRAIN LIKE YOUR HERO</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo"><a href="index.php">Train<span>like your hero</span></a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li>
									<a href="index.php">Home</a>
								</li>
							
								<li class="active">
									<a href="classes.php" class="fh5co-sub-ddown">Programs</a>
									 <ul class="fh5co-sub-menu">
									 	<li><a href="bodybuilding.php">Bodybuilding</a></li>
									 	<li><a href="fitness.php">Fitness</a></li>
										<li>
											<a href="kickboxing.php" class="fh5co-sub-ddown">Kickboxing</a>
											
										</li>
										<li><a href="boxing.php">Boxing</a></li>
										<li><a href="karate.php">Martial Arts</a></li>
										<li><a href="mma.php">MMA</a></li> 
									</ul>
								</li>
								<li>
									<a href="session.php">Log in</a>
								</li>
								<li><a href="trainer.php">Heros</a></li>
								<li class="active"><a href="livredor.php">Guestbook</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>		
		</div>
		<!-- end:fh5co-header -->
          
            <?php
 
 $mysqli = new mysqli('localhost','med-elbaidi','@Callmemed2002','zfl2-zel_baimo');

            if ($mysqli->connect_errno)
{
 // Affichage d'un message d'erreur
 echo "Error: Problème de connexion à la BDD \n";
 echo "Errno: " . $mysqli->connect_errno . "\n";
 echo "Error: " . $mysqli->connect_error . "\n";
 // Arrêt du chargement de la page
 exit();
}
            if (!$mysqli->set_charset("utf8")) {
 printf("Pb de chargement du jeu de car. utf8 : %s\n", $mysqli->error);
 exit();
}
            $requete="SELECT * FROM t_oeuvre_ovr
 join t_presentation_prt using(ovr_code)
 join t_exposant_exp using(exp_id)
 where ovr_code=". $_GET['ovr_code'] .";";
            
       $result1 = $mysqli->query($requete);
     if($oeuv = $result1->fetch_assoc()){
            
		echo'<div class="fh5co-parallax" style="background-image: url(images/ouvrecover.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell animate-box">
							<h1 class="text-center">'.$oeuv['ovr_intitule'].'</h1>
							
						</div>
					</div>
				</div>
			</div>
		</div>';
     }
  echo('</div>');
   $mysqli->close();
   ?>
       
            	<div id="fh5co-team-section" class="fh5co-lightgray-section">
			      <div class="container">
				<div class="row">
                    <div class="row text-center">
      <?php
 
 $mysqli = new mysqli('localhost','med-elbaidi','@Callmemed2002','zfl2-zel_baimo');

            if ($mysqli->connect_errno)
{
 // Affichage d'un message d'erreur
 echo "Error: Problème de connexion à la BDD \n";
 echo "Errno: " . $mysqli->connect_errno . "\n";
 echo "Error: " . $mysqli->connect_error . "\n";
 // Arrêt du chargement de la page
 exit();
}
            if (!$mysqli->set_charset("utf8")) {
 printf("Pb de chargement du jeu de car. utf8 : %s\n", $mysqli->error);
 exit();
}
            $requete="SELECT * FROM t_oeuvre_ovr
 join t_presentation_prt using(ovr_code)
 join t_exposant_exp using(exp_id)
 where ovr_code=". $_GET['ovr_code'] .";";
            
       $result1 = $mysqli->query($requete);
    
       
        
       echo'<div class="col-md-4 col-sm-6">
						<div class="heading-section text-center animate-box">
                             <div class="team-section-grid animate-box" style="background-image: url(images/'.$oeuv['ovr_fichier_img'].');">
                           </div>
							<h2> Program : </h2>
							<p>'.$oeuv['ovr_description'].'</p>
                            <h4>'.$oeuv['ovr_date_creation'].'</h4>
						</div>
			
				
				</div>';
             
      
  echo('</div>');
                        
                        
                     while ($oeuv = $result1->fetch_assoc()){        
                          echo'<h3>'.$oeuv['exp_prenom'].' '.$oeuv['exp_nom'].' <img src="images/'.$oeuv['exp_fichier_img'].'" alt="Image" class="img-responsive" width="80" height="45" style="border:solid 3px #A48C5A;"></h3>';
                        
                     }
                        
   $mysqli->close();
   ?>
</div>
					</div>
				</div>
			</div>
		
		<!-- END map -->
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
					
                       

					<div class="row copy-right">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
						</div>
					</div>
				</div>
			</div>
	
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>


 
