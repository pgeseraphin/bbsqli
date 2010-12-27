<?php
/*
 * Created on 17 déc. 2010
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

 phpinfo();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<head>
		<title>Page d'accueil</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<form action="connexion.php" method="post">
			<p>
			<label>Login:</label>  
			<input type="text" name="login" />
			<label>mot de passe:</label>
			<input type="password" name="mot_de_passe" />
			<input type="submit" value="Valider" />
			<a href= "inscription.php">ou s'inscrire</a><br/>
			<a href= "pass_oublie.php">mot de passe oublie? </a>
			
			</p>
		</form>
	</head>
	<hr />
	<body>
		
		<?php
		//Afichons les derniers blogs crées ou mis à jours
		
try
{
	
	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	$bdd = new PDO('mysql:host=localhost;dbname=Blog', 'root', 'veniu/', $pdo_options);
	
	
	$reponse = $bdd->query('SELECT TitreBlog FROM Utilisateur ORDER BY DateCreationCompte DESC LIMIT 0, 10');
	
	while ($donnees = $reponse->fetch())
	{
		//echo '<p><strong>' . htmlspecialchars($donnees['titreBlog'])';
		echo " $donnees[TitreBlog] <br/>"; 
		
	}
	
	$reponse->closeCursor();
}
catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
}

$reponse->closeCursor();


?>
		
		
		
	</body>
</html>