<?php
require_once 'db.php';
require_once 'lib.php';

//mettre l'URL de la page courante dans la session
session_start();
$_SESSION['curPageName'] = curPageName();

//window.location.href = 'moder_active.php?t=1&c=2&id=' + id;
//t -> type 1:publications 2:commentaire
//c -> categorie 1:activer 0:desactiver

switch ($_GET['t']) {
	case 1 :
		//modification des publications
		$sql = 'UPDATE Blog SET Approuve=' . $_GET["c"] .
		' WHERE IdBlog=' . $_GET["id"];

		if ($conn->query($sql)) {
			header('Location: ' . $_SESSION['curPageURL'] . '&mod=1');
		} else {
			die('Error: ' . $conn->error);
		}
		break;

	case 2 :
		//modification des commentaires
		$sql = 'UPDATE CommentaireBlog SET Approuve=' . $_GET["c"] .
		' WHERE IdCommentaireBlog=' . $_GET["id"];

		if ($conn->query($sql)) {
			header('Location: ' . $_SESSION['curPageURL'] . '&mod=1');
		} else {
			die('Error: ' . $conn->error);
		}
		break;
}
?>
