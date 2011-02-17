<?php
/*
 * Created on 17 déc. 2010
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
$login = $_POST['login'];
$pwd = $_POST['mot_de_passe'];
$autorisation = (isset($_POST['login'])) && (isset($_POST['mot_de_passe'])) && ($login != "") && ($login == $pwd);

if(!$autorisation) 
{
	header("Location: index.php");
}
else
{
	 
	echo "$login Bienvenue sur ton profile ";
}

?>
