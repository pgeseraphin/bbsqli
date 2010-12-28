<?php
require_once 'db.php';

$sql = "INSERT INTO Utilisateur (Type, Login, Password, Email)" .
		" VALUES ('$_POST[type]', '$_POST[login]','$_POST[password]', '$_POST[email]')";



//$results = $conn->query($sql);

if ($conn->query($sql)) {
	$msg = 'Le compte a &eacute;t&eacute; cr&eacute&eacute;';
	header('Location: '.$_POST['curPageURL'].'&ok=1');
}
else{
	die('Error: ' . mysql_error());
}
?>
