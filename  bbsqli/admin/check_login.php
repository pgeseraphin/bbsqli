<?php
require_once 'db.php';

$request = trim(strtolower($_REQUEST['login']));
//$request = 'test3';
usleep(150000);
$valid = 'true';

$sql = 'SELECT Login' .
' FROM Utilisateur WHERE TRIM(LOWER(Login))="' . $request.'"';

$results = $conn->query($sql);

if ($results->num_rows) {

	$valid = 'false';

} else {
	die('Error: ' . $conn->error);
}

echo $valid;
?>
