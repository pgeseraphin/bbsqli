<?php


/*
 * Created on 5 janv. 2011
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

echo '<ul id="mainNav">' .
'<li><a href= "../../index.php">ACCUEIL</a></li>' .
'<!-- Use the "active" class for the active menu item  -->' .
'<li><a href="../../test_get.php">GET</a></li>' .
'<li><a href="../../test_post.php">POST</a></li>' .
'<li><a href="../../test_header.php">HEADER</a></li>' .
'<li><a href="../../test_cookie.php" class="active">COOKIE</a></li>';

session_start();

if ($_SESSION['user_type'] == '1') {
	echo '<li><a href="admin.php">ADMINISTRATION</a></li>';
}
elseif ($_SESSION['user_type'] == '2') {
	echo '<li><a href="moder.php">MODERATION</a></li>';
}

if (!isset ($_SESSION['user_id'])) {
	echo '<li class="logout"><a href = "../connexion.php">CONNEXION</a>';
} else {
	echo '<li class="logout"><a href = "../deconnexion_post.php">DECONNEXION</a>';
}

echo '</li></ul>';
?>
