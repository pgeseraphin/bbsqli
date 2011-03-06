<?php

echo '<ul id="mainNav">' .
'<li><a href= "index.php">ACCUEIL</a></li>' .
'<!-- Use the "active" class for the active menu item  -->' .
'<li><a href="admin/header/test_HEADER.php">HEADER (sans erreur)</a></li>'.
'<li><a href="admin/header_erreur/test_HEADER_erreur.php">HEADER (avec erreur)</a></li>';


session_start();

if ($_SESSION['user_type'] == '1') {
	echo '<li><a href="admin/admin.php">ADMIN</a></li>';
}
elseif ($_SESSION['user_type'] == '2') {
	echo '<li><a href="admin/moder.php">MODERATION</a></li>';
}

if (!isset($_SESSION['user_id'])) {
	echo '<li class="logout"><a href = "connexion.php">CONNEXION</a>';
} else {
	echo '<li class="logout"><a href = "deconnexion_post.php">DECONNEXION</a>';
}


echo '</li></ul>';
?>

