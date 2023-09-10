<div class="gtco-section">
    <style>
        body{
    background-color: #EDDCB7;
}
</style>



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

if ( $_POST["pseudo"] )
{

$id= htmlspecialchars(addslashes(($_POST["pseudo"])));

$requete0="select pfl_validite from t_profil_pfl where cpt_pseudo ='" .$id. "' ";

$result0 = $mysqli->query($requete0); 

if($result0 == true ){

$infouser=$result0->fetch_assoc();
if($infouser['pfl_validite']=='A'){
$validite='D';
    }
    else{
     $validite='A';
    }
    
    $requete1="UPDATE t_profil_pfl SET pfl_validite ='" .$validite. "' where cpt_pseudo ='" .$id. "'";

    $result1 = $mysqli->query($requete1); 

        if ($result1 == false) //Erreur lors de l’exécution de la requête
        {
        // La requête a echoué
        echo "Error: La requête update échoué \n";
        echo "Query: " . $requete1 . "\n";
        echo "Errno: " . $mysqli->errno . "\n";
        echo "Error: " . $mysqli->error . "\n";
        exit;
        }

        else //Requête réussie
        {
        echo "<br />";
         header('Location:admin_acceuil.php');
        }
}

}
        


?>