<?php
/*
 * Created on 24 déc. 2010
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 /*function accesBase(){
  $host = "localhost";
  $user = "root";
  $pass = "veniu/";
  $bdd = "Blog";
  $mysqli = new mysqli($host, $user, $pass, $bdd);
  if(mysqli_connect_errno()){
  error_log(mysql_error(), 3, "log/application_log.err");
  }
  return $mysqli;
  
  }*/
$host = "localhost";
$user = "root";
$pass = "cazeau";
$bdd = "Blog";
/*$mysqli = new mysql($host, $user, $pass, $bdd) or die(mysql_error());
 $conn = mysql_connect($host, $user, $pass);
 if(!$conn)
 echo " ...... erreur";
 else
 mysql_select_db($bdd);*/
$conn = new mysqli('localhost', 'root', 'tololo', 'Blog');

/* check connection */
if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit ();
}
?>
