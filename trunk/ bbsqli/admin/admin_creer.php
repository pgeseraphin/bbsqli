<?php
require_once 'auth_admin.php';
require_once 'db.php';
require_once 'lib.php';

//mettre l'URL de la page courante dans la session
session_start();
$_SESSION['curPageName'] = curPageName();

//insertion de la ligne
$sql = 'INSERT INTO Utilisateur (Type, Login, Password, Email)' .
' VALUES ("' . $_POST["type"] . '", "' . $_POST["login"] . '","' . $_POST["password"] . '", "' . $_POST["email"] . '")';

if ($conn->query($sql)) {
	if (strpos($_SESSION['curPageURL'], '?')) {
		header('Location: ' . $_SESSION['curPageURL'] . '&aj=1');
	} else {
		header('Location: ' . $_SESSION['curPageURL'] . '?aj=1');
	}
} else {
	die('Error: ' . $conn->error);
}
?>
