<?php
require_once 'db.php';
require_once 'lib.php';

session_start();
$_SESSION['curPageURL'] = curPageURL();

//pour obtenir le lien actif (variable 'cat')
switch ($_GET["cat"]) {
	case 1 :
		$titre = 'Publications &agrave; Mod&eacute;rer';
		$appr = 'IS NULL';
		$active = 1;
		break;
	case 2 :
		$titre = 'Publications D&eacute;sactiv&eacute;es';
		$appr = '=0';
		$active = 2;
		break;
	case 3 :
		$titre = 'Publications Activ&eacute;es';
		$appr = '=1';
		$active = 3;
		break;	
	case 4 :
		$titre = 'Commentaires &agrave; Mod&eacute;rer';
		$appr = 'IS NULL';
		$active = 4;
		break;
	case 5 :
		$titre = 'Commentaires D&eacute;sactiv&eacute;s';
		$appr = '=0';
		$active = 5;
		break;
	case 6 :
		$titre = 'Commentaires Activ&eacute;s';
		$appr = '=1';
		$active = 6;
		break;	
	case 7 :
		$titre = 'Mon Profil';
		$active = 7;
		break;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style/img/favicon.ico" rel="icon" type="image/x-icon" />
<title>Mon Blog - Mod&eacute;ration</title>

<!-- CSS -->
<link href="style/css/transdmin.css" rel="stylesheet" type="text/css" media="screen" />
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="screen" href="style/css/ie6.css" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" media="screen" href="style/css/ie7.css" /><![endif]-->


<!-- JavaScripts-->
<script type="text/javascript" src="style/js/jquery.js"></script>
<script type="text/javascript" src="style/js/jNice.js"></script>
