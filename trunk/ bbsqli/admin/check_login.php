<?php
require_once 'db.php';

$request = trim(strtolower($_REQUEST['login']));

$valid = 'true';

$sql = 'SELECT COUNT(Login) AS Nombre' .
' FROM Utilisateur WHERE TRIM(LOWER(Login))="' . $request . '"';

$results = $conn->query($sql);

if ($results->num_rows) {
	while ($row = $results->fetch_array()) {
		if ($row['Nombre'] > 0) {
			$valid = 'false';
		}
	}
} else {
	die('Error: ' . $conn->error);
}

echo $valid;
?>