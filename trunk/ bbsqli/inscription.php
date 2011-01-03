<?php
/*
 * Created on Dec 15, 2010
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<head>
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Page d'inscription</title>		
		<link href="lib/template/style/css/transdmin.css" rel="stylesheet" type="text/css" media="screen" />
	    <script type="text/javascript" src="lib/template/style/js/jquery.js"></script>
        <script type="text/javascript" src="lib/template/style/js/jNice.js"></script>   
	</head>
<body>

<div id="wrapper">
    	<!-- h1 tag stays for the logo, you can use the a tag for linking the index page -->
    	<h1><a href="#"><span>Mon Blog</span></a></h1>
        
        <!-- You can name the links with lowercase, they will be transformed to uppercase by CSS, we prefered to name them with uppercase to have the same effect with disabled stylesheet -->
        <ul id="mainNav">
        	<li><a href="#" class="active">ACCUEIL</a></li> <!-- Use the "active" class for the active menu item  -->
        	<li><a href="#">OPTION</a></li>        	     	
        	<li class="logout"><a href="#">DECONNEXION</a></li>
        </ul>
        <!-- // #end mainNav -->
        
        <div id="containerHolder">
			<div id="container">
        		<div id="sidebar">
                	<ul class="sideNav">
                	
                    	<li><a href="#">Céer un blog</a></li>                    	
                    	<li><a href="#">Archives</a></li>
                    	<li><a href="#">Mon profil</a></li>
                    	
                    </ul>
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->
                
                <!-- h2 stays for breadcrumbs -->
                <h2><a href="#">Dashboard</a> &raquo; <a href="#" class="active">Print resources</a></h2>
                
                <div id="main">
                <form action="inscription_post.php" methode="post" class="jNice">
                	<h3>Another section</h3>
                    	<fieldset>
                        	<p><label>Nom*:</label><input type="text" name="nom" class="text-long" /></p>
                        	<p><label>Prénom*:</label><input type="text" name="prenom" class="text-long" /></p>
                        	<p><label>Login*:</label><input type="text" name="login" class="text-long" /></p>
                        	<p><label>Mot de passe*:</label><input type="password" name="mot_de_passe" class="text-long" /></p>
                        	<p><label>confirmez le mot de passe*:</label><input type="password" name="confirmation_mdp" class="text-long" /></p>
                        	<p><label>Titre de votre blog*:</label><input type="text" name="titre_blog" class="text-long" /></p>
                        	<p><label>Email*:</label><input type="text" name="email" class="text-long" /></p>
                        	<p><label>Téléphone mobile:</label><input type="text" name="mobile" class="text-long" /></p>
                        	<p><label>Téléphone fixe:</label><input type="text" name="tel_fixe" class="text-long" /></p>
                        	<p><label>Fax:</label><input type="text" name="fax" class="text-long" /></p>
                        	<p><label>Adresse:</label><input type="text" name="adresse" class="text-long" /></p>
                        	<p><label>Code postal, ville et Pays:</label>
                        	<input type="text" name="code_postal" class="text-small" /><input type="text" name="ville" class="text-small" /><input type="text" name="pays" class="text-medium" /></p>
                            <p><label>Sexe:</label>
                            <select>
                                <option>Faire un choix</option>
                            	<option>Masculin</option>
                            	<option>Feminin</option>                            	
                            </select>
                            </p>                            
                        	<p><label>A propos de vous:</label><textarea name="description" rows="1" cols="1"></textarea></p>
                            <input type="submit" value="Enregistrer" />
                        </fieldset>
                    </form>
                
                </div>
                <!-- // #main -->
                
                <div class="clear"></div>
            </div>
            <!-- // #container -->
        </div>	
        <!-- // #containerHolder -->
        
        <p id="footer">Mon Blog &#169; 2010-2011</p>
    </div>
    <!-- // #wrapper -->

 	
</body>

<!--

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
-->
</html>
