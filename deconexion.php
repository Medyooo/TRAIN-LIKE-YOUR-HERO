<?php 
session_start();

session_unset();

session_destroy();
$_SESSION[]=''; // detruire session_login
header('Location:admin_acceuil.php');