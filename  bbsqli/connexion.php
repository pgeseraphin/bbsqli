<?php
/*
 * Created on 21 déc. 2010
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
 
$login = $_POST['login'];
$pwd = $_POST['mot_de_passe'];
//$autorisation = true;
//$autorisation = (isset($_POST['login'])) && (isset($_POST['mot_de_passe'])) && ($login != "") && ($login == $pwd);
$autorisation = ((isset($_POST['login'])) && (isset($_POST['mot_de_passe'])) && ($login != "") && ($pwd != ""));

if(!$autorisation) 
{
	echo "******************** $login $pwd $autorisation";
	//header('Location: index.php');
}
else
{
	$bdd = mysql_connect("localhost", "root", "veniu/");
	mysql_select_db("Blog");
	//echo "*********************  $bdd";
	$sql = "SELECT * FROM Utilisateur WHERE Login = '$login' AND Password = '$pwd' ";
	$resultat = mysql_query($sql);
	
	//echo " $n ++++";
	if(mysql_num_rows($resultat)!= 0){
		//echo " $sql[Nom]";
		$utilisateur = mysql_fetch_array($resultat);
		print(" connexion avec succès : $utilisateur[Email]");
		//header('Location: index.php');
		
	}
	else {
		//echo " $sql[Nom]";
		print("Echec de connexion ");
		//header('Location: inscription.php');
	}
	mysql_close($bdd);
	//echo "$login Bienvenue sur ton profile"; 
}

?>
