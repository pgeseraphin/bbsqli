<?php
/*
 * Created on 21 déc. 2010
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
 // Envoyer les données dans la base
 session_start();
$date_po = date("Y-m-d");
$errors = array (); // pour contenir les erreurs
 
require_once 'param_connexion.php';


 $id=$_SESSION['user_id'];

if($id==""){
	print("Vous devez vous connecter avant de publier un article");
	header('Location: connexion.php');
	
}
else{
	$sql = 'INSERT INTO Blog (IdUtilisateur,Titre,Contenu,DatePostee)' .
	' VALUES (' .$id. ',"' . $_POST["titre"] . '", "' . $_POST["contenu"] . '","'.$date_po.'")';
if($conn->query($sql)){
	print(" enregistrement avec succès");
	header('Location: index.php');
	
}
else {
	print("Echec de création ");
	header('Location: creer_blog_post.php');
}
	
}


?>
