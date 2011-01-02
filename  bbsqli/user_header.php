<?php
require_once 'admin/db.php';
require_once 'admin/lib.php';

session_start();
$_SESSION['curPageURL'] = curPageURL();

//pour obtenir le lien actif (variable 'cat')
switch ($_GET["cat"]) {
	case 1 :
		$titre = 'Mes publications';
		$active = 1;
		break;
	case 2 :
		$titre = 'Modifier mon profil';
		$active = 2;
		break;	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="admin/style/img/favicon.ico" rel="icon" type="image/x-icon" />
<title>Mon Blog - Profil</title>

<!-- CSS -->
<link href="admin/style/css/transdmin.css" rel="stylesheet" type="text/css" media="screen" />
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="screen" href="admin/style/css/ie6.css" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" media="screen" href="admin/style/css/ie7.css" /><![endif]-->


<!-- JavaScripts-->
<script type="text/javascript" src="admin/style/js/jquery.js"></script>
<script type="text/javascript" src="admin/style/js/jNice.js"></script>
