<?php
require_once 'admin/db.php';
require_once 'admin/lib.php';

//mettre l'URL de la page courante dans la session
session_start(); 
$_SESSION['curPageName'] = curPageName();

//modification des donnees
$sql = 'UPDATE Utilisateur SET Password=' . (empty ($_POST["password"]) ? 'Password' : '"' . $_POST["password"] . '"') .
		' ,Email="'.$_POST["email"].'" ,TitreBlog="'.$_POST["titreBlog"].'" ,Prenom="'.$_POST["prenom"].'"' .
		' ,Nom="'.$_POST["nom"].'" ,Sexe="'.$_POST["sexe"].'" 	' .
		' ,DateNaissance="'.$_POST["dateNaiss"].'" ,Adresse="'.$_POST["adresse"].'"' .
		' ,CodePostal="'.$_POST["codePostal"].'" 	' .
		' ,Ville="'.$_POST["ville"].'" ,Pays="'.$_POST["pays"].'" ,Telephone="'.$_POST["telFixe"].'"' .
		' ,Mobile="'.$_POST["telPort"].'" ,Fax="'.$_POST["fax"].'" 	' .
		' ,AProposDeMoi="'.$_POST["aboutMe"].'"' .
		' WHERE IdUtilisateur='.$_POST["idUtilisateur"];

if ($conn->query($sql)) {
	if (strpos($_SESSION['curPageURL'], '?')) {
		header('Location: ' . $_SESSION['curPageURL'] . '&mod=1');
	} else {
		header('Location: ' . $_SESSION['curPageURL'] . '?mod=1');
	}
}
else{
	die('Error: ' . $conn->error);
}
?>

