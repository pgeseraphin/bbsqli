<?php
/*
 * Created on 21 déc. 2010
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
 // Envoyer les données dans la base
 
if(empty($_REQUEST['nom']) || empty($_REQUEST['prenom']) || 
		empty($_REQUEST['login']) || empty($_REQUEST['mot_de_passe']) ||
		empty($_REQUEST['confirmation_mdp']) || empty($_REQUEST['email']))
{
	
	header('Location: inscription.php');
	//die("ERREUR : les champs obligatoires doivent être remplis.");
}
$bdd = mysql_connect("localhost", "root", "veniu/");
mysql_select_db("Blog");
$sql = "INSERT INTO Utilisateur(Login, Password, Email, TitreBlog, Prenom, Nom, Adresse, CodePostal, Ville, Pays, Telephone, Mobile, Fax, AproposDeMoi) VALUES (' ".$_REQUEST['login']."', ' ".$_REQUEST['mot_de_passe']."', ' ".$_REQUEST['email']."', ' ".$_REQUEST['titre_blog']."', ' ".$_REQUEST['prenom']."', ' ".$_REQUEST['nom']."', ' ".$_REQUEST['adresse']."', ' ".$_REQUEST['code_postal']."', ' ".$_REQUEST['ville']."', ' ".$_REQUEST['pays']."', ' ".$_REQUEST['telephone_fixe']."', ' ".$_REQUEST['telephone_mobile']."', ' ".$_REQUEST['fax']."',  ' ".$_REQUEST['description']."')";

if(mysql_query($sql)!= false){
	print(" enregistrement avec succès");
	header('Location: index.php');
	
}
else {
	print("Echec de création ");
	header('Location: inscription.php');
}
mysql_close($bdd);


?>
