<?php
/*
 * Created on 21 déc. 2010
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

require_once 'param_connexion.php'; 
session_start();

//$login = $_POST['login'];
//$pwd = $_POST['mot_de_passe'];
//$autorisation = true;
$valide = (!empty($_REQUEST['login']) AND !empty($_REQUEST['mot_de_passe'])); 
//$autorisation = (isset($_POST['login'])) AND (isset($_POST['mot_de_passe'])) AND ($login != "") AND ($login == $pwd);
//$autorisation = ((isset($_POST['login'])) && (isset($_POST['mot_de_passe'])) && ($login != "") && ($pwd != ""));
$login = $_REQUEST['login'];
$pwd = $_REQUEST['mot_de_passe'];

if(!$valide) 
{
	//echo "***********++******** $login + $pwd + $valide";
	header('Location: connexion.php');
}
else
{	
	$sql = "SELECT IdUtilisateur, Login, Type FROM Utilisateur WHERE Login = '$login' AND Password = '$pwd'";
	//$sql = "SELECT IdUtilisateur, Login, Type FROM Utilisateur WHERE Login = 'log4' ";//"' AND Password = '$pwd'";
	//$sql = "SELECT IdUtilisateur, Login, Type FROM Utilisateur WHERE Login = 'sal'";
	$resultat = $conn->query($sql);
	//$resultat = $conn->query("SELECT IdUtilisateur, Login, Type FROM Utilisateur WHERE Login = 'log4' #nimporte koi");	
	//echo " $sql\n";
	//echo " $resultat->num_rows\n";
	
	if($resultat->num_rows > 0){
		$obj= $resultat->fetch_object();
		//echo " $login + $pwd £££££££  $obj->Email";		
		$_SESSION['user_id']= $obj->IdUtilisateur;
		$_SESSION['user_login']= $obj->Login;
		$_SESSION['user_type']= $obj->Type;
		
		header('Location: user_profil.php');		
	}
	else {
		
		//print("Echec de connexion ");
		header('Location: connexion.php');
	}
	$resultat->close();
    $conn->close();
    
}

?>
