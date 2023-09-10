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
									<a href="programmes.php" class="fh5co-sub-ddown">Programs</a>
									 <ul class="fh5co-sub-menu">
									 	<li><a href="bodybuilding.php">Bodybuilding</a></li>
									 	<li><a href="fitness.php">Fitness</a></li>
										<li>
											<a href="kickboxing.php" class="fh5co-sub-ddown">Kickboxing</a>
											
										</li>
										<li><a href="boxing.php">Boxing</a></li>
										<li><a href="martialarts.php">Martial Arts</a></li>
										<li><a href="mma.php">MMA</a></li> 
									</ul>
								</li>
								<li class="active">
									<a href="session.php">Sign in</a>
								</li>
								<li><a href="trainer.php">Heros</a></li>
								<li><a href="livredor.php">Guestbook</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>		
		</div>
            
		<!-- end:fh5co-header -->
		<div class="fh5co-parallax" style="background-image: url(images/ufcimage.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell animate-box">
							<h1 class="text-center">Sign in</h1>
							
						</div>
					</div>
				</div>
			</div>
		</div><!-- end: fh5co-parallax -->
		<!-- end:fh5co-hero -->
		
							
       <footer>
			<div id="footer">
				<div class="container">
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
// Instructions PHP à ajouter pour l'encodage utf8 du jeu de caractères
if (!$mysqli->set_charset("utf8")) {
 printf("Pb de chargement du jeu de car. utf8 : %s\n", $mysqli->error);
 exit();
};

if(isset($_POST['submit1'])){
    if(!empty($_POST['nom1']) && !empty($_POST['prenom1']) && !empty($_POST['pseudo1']) && !empty($_POST['email1']) && !empty($_POST['motde1'] && !empty($_POST['motde2']))){
        $nom= htmlspecialchars(addslashes(($_POST["nom1"])));
        $prenom= htmlspecialchars(addslashes(($_POST["prenom1"])));
        $id= htmlspecialchars(addslashes(($_POST["pseudo1"])));
        $email= htmlspecialchars(addslashes(($_POST["email1"])));
        $mdp= htmlspecialchars(addslashes(($_POST["motde1"])));
        $cmdp= htmlspecialchars(addslashes(($_POST["motde2"])));
        if(filter_var($_POST["email1"], FILTER_VALIDATE_EMAIL)){
            if(strcmp($_POST['motde1'], $_POST['motde2'])!=0){
                echo("Your password is incorrect ");
                echo '<a href="./inscription.php">Registration form</a>';
            }
            else{
                $requete="INSERT into `t_compte_cpt` values ('".$id."',MD5('".$mdp."'));";
                $result1 = $mysqli->query($requete);
                if ($result1==false)
                   {
                     // Affichage d'un message d'erreur
                     echo "Error: Requete non executée \n";
                     echo "Errno: " . $result1->connect_errno . "\n";
                     echo "Error: " . $result1->connect_error . "\n";
                     // Arrêt du chargement de la page
                     exit();
                    }
                $requete1="INSERT into `t_profil_pfl` (`pfl_nom`,`pfl_prenom`,`pfl_email`,`pfl_role`,`pfl_validite`,`pfl_date`,
                    `cpt_pseudo`) values ('".$nom."','".$prenom."','".$email."','D','O',CURDATE(),
                    '".$id."');";
                $result2 = $mysqli->query($requete1);
                if ($result2==false)
                   {
                     // Affichage d'un message d'erreur
                     $requete3="delete from t_compte_cpt where cpt_pseudo='" .$id. "';";
                     $result5 = $mysqli->query($requete3);
                     echo "Error: Requete non executée \n";
                     echo "Errno: " . $result2->connect_errno . "\n";
                     echo "Error: " . $result2->connect_error . "\n";
                     // Arrêt du chargement de la page
                     exit();
                    }
                else{
                    echo("Successful insertion 2");
                    header("Refresh:3;url=inscription.php");
                }
            }
    }
    else{
        echo("The email address is invalid !");
        echo '<a href="./inscription.php">Registration form</a>';
    }
    }
    else{
        echo("Not all fields are filled in !");
        echo '<a href="./inscription.php">Registration form</a>';
    }
   
}
else{
    echo("Press the button please !");
}

?>
				
                    
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

     </footer>
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

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>


