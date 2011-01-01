<?php
require_once 'db.php';

$request = trim(strtolower($_REQUEST['login']));

$valid = 'true';

$sql = 'SELECT COUNT(Login)' .
' FROM Utilisateur WHERE TRIM(LOWER(Login))="' . $request . '"';

$results = $conn->query($sql);

if ($results->num_rows) {
	while ($row = $results->fetch_row()) {
		if ($row[0] > 0) {
			$valid = 'false';
		}
	}
} else {
	die('Error: ' . $conn->error);
}

echo $valid;
?>