<?php
/*
 * Created on 21 déc. 2010
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
 // Envoyer les données dans la base
 
require_once 'param_connexion.php';
 
if(empty($_REQUEST['nom']) || empty($_REQUEST['prenom']) || 
		empty($_REQUEST['login']) || empty($_REQUEST['mot_de_passe']) ||
		empty($_REQUEST['confirmation_mdp']) || empty($_REQUEST['email']))
{
	
	header('Location: inscription.php');
	//die("ERREUR : les champs obligatoires doivent être remplis.");
}

$sql = "INSERT INTO Utilisateur(Login, Password, Email, TitreBlog, Prenom, Nom, Adresse, CodePostal, Ville, Pays, Telephone, Mobile, Fax, AproposDeMoi) VALUES (' ".$_REQUEST['login']."', ' ".$_REQUEST['mot_de_passe']."', ' ".$_REQUEST['email']."', ' ".$_REQUEST['titre_blog']."', ' ".$_REQUEST['prenom']."', ' ".$_REQUEST['nom']."', ' ".$_REQUEST['adresse']."', ' ".$_REQUEST['code_postal']."', ' ".$_REQUEST['ville']."', ' ".$_REQUEST['pays']."', ' ".$_REQUEST['tel_fixe']."', ' ".$_REQUEST['mobile']."', ' ".$_REQUEST['fax']."',  ' ".$_REQUEST['description']."')";

if($conn->query($sql)){
	print(" enregistrement avec succès");
	header('Location: index.php');
	
}
else {
	print("Echec de création ");
	header('Location: inscription.php');
}
$conn->close();

?>
