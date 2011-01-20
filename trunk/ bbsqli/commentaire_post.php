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
 
require_once 'param_connexion.php';



if(!$_POST["conte"]==""){
	$sql = 'INSERT INTO CommentaireBlog (IdBlog,IdUtilisateur,Contenu,DatePostee)' .
	' VALUES (' .$_POST["idblog"]. ',' .$_SESSION['user_id']. ', "' . $_POST["conte"] . '","'.$date_po.'")';
	
if($conn->query($sql)){
	print(" enregistrement avec succès");
	header('Location: index.php');
	
}
else {
	print("Echec de création ");
	//header('Location: creer_blog_post.php');
}
	
}
else{	

	header('Location: index.php');
}

//}
?>
