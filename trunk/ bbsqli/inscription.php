<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<head>
		<title>Page d'inscription</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link rel="stylesheet" media="screen" type="text/css" title="Design" href="css/design.css" />
	</head>
<?php
/*
 * Created on Dec 15, 2010
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
echo "Page d'inscription";

?>

<br>
<br>

<form action="inscription_post.php" methode = "post">
Nom<br> 
<input type="text" name="nom" /><br>
Prénom<br> 
<input type="text" name="prenom" /><br>
Login<br> 
<input type="text" name="login" /><br>
Mot de passe<br>
<input type="password" name="mot_de_passe" /><br>
Conformer le mot de passe<br> 
<input type="password" name="confirmation_mdp" /><br>
titre de votre blog<br> 
<input type="text" name="titre_blog" /><br>
Email<br> 
<input type="text" name="email" /><br>
Télephone mobile<br>
<input type="text" name="tel_mobile" /><br>
Télephone fixe<br>
<input type="text" name="telephone_fixe" /><br>
Fax<br>
<input type="text" name="fax" /><br>
Adresse<br>
<input type="text" name="adresse" /><br>
Code postal<br>
<input type="text" name="code_postal" /><br>
Ville<br>
<input type="text" name="ville" /><br>
Pays<br>
<input type="text" name="pays" /><br>
<input type="radio" name="masculin" /><br>
<input type="radio" name="feminin" /><br>
A propos de moi:<br>
<textarea name="description" rows="8" cols="45" > Mettez votre text ici</textarea><br>

<input type="submit" value="Enregistrer" />
</form>

</html>
