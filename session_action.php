
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

?>



<?php

if ( $_POST["pseudo"] &&  $_POST["mdp"]  )
{
$id= htmlspecialchars(addslashes(($_POST["pseudo"])));
$mdp= htmlspecialchars(addslashes(($_POST["mdp"])));
}

$sql="SELECT cpt_pseudo,cpt_mdp FROM t_compte_cpt WHERE
cpt_pseudo='" . $id . "' AND cpt_mdp=MD5('" . $mdp . "');";

$sql1="SELECT cpt_pseudo , pfl_role from t_profil_pfl
join t_compte_cpt using (cpt_pseudo)
where pfl_validite='A' and cpt_pseudo='" . $id . "' and cpt_mdp = MD5('" . $mdp . "') ;";

$sql2="SELECT pfl_role from t_profil_pfl
join t_compte_cpt using (cpt_pseudo)
where pfl_validite='A' and cpt_pseudo='" . $id . "' and cpt_mdp = MD5('" . $mdp . "') ;";

$resultat = $mysqli->query($sql);
$resultat2 = $mysqli->query($sql2);
$resultat1 = $mysqli->query($sql1);
if ($resultat==false || $resultat1==false ) {
 // La requête a echoué
 echo "Error: Problème d'accès à la base \n";
 exit();
 }
 else{

  if($resultat1->num_rows == 1 and $resultat2->num_rows == 1 ) {
    $inforole=$resultat2->fetch_assoc();
    $_SESSION['login']= $id ;
    $_SESSION['role']= $inforole['pfl_role'] ;
  header('Location:admin_acceuil.php');
  }
  else{
    
    echo "<br/><a href=\"./session.php\">Cliquez ici pour réafficher le formulaire</a>";
  }
 }

?>		
			