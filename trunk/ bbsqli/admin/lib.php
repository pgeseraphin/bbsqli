<?php

//Pour obtenir l'URL de la page courante
function curPageURL() {
	$pageURL = 'http';
	if ($_SERVER["HTTPS"] == "on") {
		$pageURL .= "s";
	}
	$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
	} else {
		$pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
	}
	return $pageURL;
}
//fin curPageURL()

//pour obtenir le nom de la page courante
function curPageName() {
	return substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
}
//fin curPageName()

//pour obtenir le libelle du type de l'utilisateur a partir de la valeur du type
function labelType($type) {
	switch ($type) {
		case 1 :
			return 'Administrateur';
			break;
		case 2 :
			return 'Mod&eacute;rateur';
			break;
		case 3 :
			return 'Utilisateur';
			break;
	}
}
//fin labelType()
?>