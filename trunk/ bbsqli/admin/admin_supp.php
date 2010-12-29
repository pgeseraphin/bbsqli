<?php
require_once 'db.php';
require_once 'lib.php';

//mettre le nom de la page courante dans la session
session_start(); 
$_SESSION['curPageName'] = curPageName();

//supression de la ligne
$sql = 'DELETE FROM Utilisateur WHERE IdUtilisateur='.$_GET["idU"];

if ($conn->query($sql)) {
	header('Location: '.$_SESSION['curPageURL'].'&sup=1');
}
else{
	die('Error: ' . $conn->error);
}
 
 
?>
