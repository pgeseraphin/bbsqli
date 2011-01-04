<?php
/*
 * Created on 4 janv. 2011
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
 require_once 'param_connexion.php';

$request = $_REQUEST['email'];

$valid = 'true';

$sql = "SELECT Email FROM Utilisateur WHERE Email = '$request'";

if($results = $conn->query($sql)){
	
	if ($results->num_rows > 0) 
		$valid = 'false';
	
}else {
	die('Error: ' . $conn->error);
}

echo $valid;
?>
