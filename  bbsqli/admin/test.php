<?php

/*
 * Created on Dec 25, 2010
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
require_once 'db.php';

$sql = 'SELECT IdUtilisateur, Type, Login, Password, Email, TitreBlog, Prenom, Nom, ' .
'Sexe, DateNaissance, Photo, Adresse, CodePostal, Ville, Pays, Telephone, Mobile, Fax, AProposDeMoi, DateCreationCompte, DerniereDateConnexion FROM Utilisateur';

$results = $conn->query($sql);

if($results->num_rows) {
	while ($row = $results->fetch_row()) {

		
		
		echo $row[2];

	}
}
?>
