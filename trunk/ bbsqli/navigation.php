<?php

/*
 * Created on 5 janv. 2011
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

echo '<ul id="mainNav">' .
'<li><a href= "index.php">ACCUEIL</a></li>' .
'<!-- Use the "active" class for the active menu item  -->' .
'<li><a href="admin/test.php">GET (sans erreurs)</a></li>' .
'<li><a href="admin/get/test_GET.php">GET</a></li>' .
'<li><a href="admin/get_string/test_GET_string.php">GET_string</a></li>' .

'<li><a href="admin/get_string_erreur/test_GET_string.php">GET_str_Err</a></li>' .
'<li><a href="test_post.php">POST</a></li>' .
'<li><a href="admin/cookie/test_COOKIE.php">COOKIE</a></li>'.
'<li><a href="admin/cookie_string/test_COOKIE_string.php">COOKIE string</a></li>';

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