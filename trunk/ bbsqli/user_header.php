<?php
require_once 'param_connexion.php';
require_once 'admin/lib.php';

session_start();
$_SESSION['curPageURL'] = curPageURL();

//pour obtenir le lien actif (variable 'cat')
switch ($_GET["cat"]) {
	case 1 :
		$titre = 'Mes publications';
		$active = 1;
		break;
	case 2 :
		$titre = 'Modifier mon profil';
		$active = 2;
		break;	
}
?>

