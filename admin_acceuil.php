<?php
session_start();

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

if(!isset($_SESSION['login'])) 
{
 
header("Location:session.php");
}

?>

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
									<a href="session.php">News management</a>
								</li>
								<li><a href="trainer.php">Exhibtor management</a></li>
								<li><a href="livredor.php">Works management</a></li>
                                <li><a href="admin_ticket.php">Visitor ticket management</a></li>
                                 <li><a href="livredor.php">Configuration  management</a></li>
                                	<li><a href="deconexion.php">Log out</a></li>
                                
                                 	
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
                    
							
							
						</div>
					</div>
				</div>
			</div>
		</div>
   
        <!-- end: fh5co-parallax -->


 <footer>
			<div id="footer">
				<div class="container">
	<?php
	
//Préparation de la requête récupérant tous les news
$requete="SELECT * FROM t_profil_pfl;";
//Affichage de la requête préparée
$requete2="SELECT cpt_pseudo FROM t_profil_pfl;";



$result1 = $mysqli->query($requete);
$result2 = $mysqli->query($requete2);


if($requete2==false){
	echo("requete echoue");
	exit();
}

if($_SESSION['role'] == 'A'){ 
  echo("<div class='text-center' >
							<h2>Welcome ".$_SESSION['login']."</h2>
							<p>Your are an administrator </p>
                     
    </div>");

echo("<table class='table table-hover'>");
echo("<thead
	<tr>
	<th>Last Name</th>
	<th>First Name</th>
	<th>Email</th>
	<th>Validity</th>
	<th>Role</th>
	<th>creation Date</th>
	<th>Pseudo</th>
	</tr>
	</thead>
	<tbody>");
 while ($pfl = $result1->fetch_assoc())
 {
echo("<tr>");
echo ("<td>".$pfl['pfl_nom']."</td>"."<td>".$pfl['pfl_prenom']."</td>");
 echo ("<td>".$pfl['pfl_email']."</td>"."<td>".$pfl['pfl_validite']."</td>");
 echo ("<td>".$pfl['pfl_role']."</td>"."<td>".$pfl['pfl_date']."</td>");
 echo ("<td>".$pfl['cpt_pseudo']."</td>");
 echo ("</tr>");
 }
 echo("</tbody></table>");
}
else{
echo("<div class='text-center' >
							<h2>Welcome ".$_SESSION['login']."</h2>
							<p>Your are an organizer</p>
                     
    </div>");

}
?>

<form method="post" action="comptes_action.php">
	
  <select name="pseudo" id="pseudo">
   <?php
    while($psd = $result2->fetch_assoc()){?>
    <option value="<?=$psd['cpt_pseudo']?>"><?=$psd['cpt_pseudo']?></option>
<?php }$mysqli->close(); ?> 
  </select>
  <br><br>
  <button type="submit" name="submit1" class="btn btn-primary">Activate/Desactivate</button>
</form>
	</div>
					</div>
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


