<?php

/*
 * Created on Dec 24, 2010
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

//$conn = new mysqli('localhost', 'root', 'veniu/', 'Blog');
$conn = new mysqli('localhost', 'root', 'tololo', 'Blog');

/* check connection */
if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit ();
}
?>
