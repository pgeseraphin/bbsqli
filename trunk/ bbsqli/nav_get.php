<?php

echo '<ul id="mainNav">' .
'<li><a href= "index.php">ACCUEIL</a></li>' .
'<!-- Use the "active" class for the active menu item  -->' .
'<li><a href="admin/test_unprotect.php?id=1">GET INT (sans erreur)</a></li>' .
'<li><a href="admin/get/test_unprotect.php?id=1">GET INT (avec erreur)</a></li>'.
'<li><a href="admin/get_string/test_string_GET.php?login=">GET STR (sans erreur)</a></li>'.
'<li><a href="admin/get_string_erreur/test_string_GET.php?login=">GET STR (avec erreur)</a></li>';


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
