<?php

/*
 * Created on 5 janv. 2011
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

echo '<ul id="mainNav">' .
'<li><a href= "index.php" class="active">ACCUEIL</a></li>' .
'<!-- Use the "active" class for the active menu item  -->' .
'<li><a href="#">OPTION</a></li>';

session_start();
if ($_SESSION['user_type'] == '1') {
	echo '<li><a href="admin/admin.php">ADMINISTRATION</a></li>';
}
elseif ($_SESSION['user_type'] == '2') {
	echo '<li><a href="admin/moder.php">MODERATION</a></li>';
}

if (sizeof($_SESSION) == 0) {
	echo '<li class="logout"><a href = "connexion.php">CONNEXION</a>';
} else {
	echo '<li class="logout"><a href = "deconnexion_post.php">DECONNEXION</a>';
}

echo '</li></ul>';
?>
