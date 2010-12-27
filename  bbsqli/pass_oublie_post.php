<?php
/*
 * Created on 24 déc. 2010
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
$email = $_POST['email'];
$valide = (isset($_POST['email'])) && ($email!="");
if(!$valide)
{
	header('Location: pass_oublie.php');
} 
else 
{
	//$connexion = mysqli_connect("localhost", "root", "veniu/", "Blog");
	//$connexion = new mysqli("localhost", "root", "veniu/", "Blog");
	include('param_connexion.php');
	$req = "SELECT * FROM Utilisateur WHERE Email = '$email'";
	$res = mysql_query($req);
	$nb = mysql_num_rows($res);
	if($nb != 0){
		

		$user = mysql_fetch_array($res);
		echo "$nb et $user[Nom] +++  ";
		echo "$email  valide";
	}
	else
		echo " echec de connexion";
	
	mysql_close($conn);
	
}
?>
