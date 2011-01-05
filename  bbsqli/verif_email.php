<?php

/*
 * Created on 4 janv. 2011
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

require_once 'param_connexion.php';

$request = trim(strtolower($_REQUEST['email']));

$valid = 'true';

$sql = "SELECT COUNT(Email) AS Nombre FROM Utilisateur WHERE TRIM(LOWER(Email)) = '$request'";

$results = $conn->query($sql);

if ($results->num_rows) {
	$row = $results->fetch_array();
	if ($row['Nombre'] > 0) {
		$valid = 'false';
	}
} else {
	die('Error: ' . $conn->error);
}

echo $valid;
?>
