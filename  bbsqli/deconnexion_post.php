<?php
/*
 * Created on 3 janv. 2011
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 session_start();
 //on écrase le tableau de session
 $_SESSION = array();
 // on détruit la session
 session_destroy();
 header('Location: index.php');
?>
