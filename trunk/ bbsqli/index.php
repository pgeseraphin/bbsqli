<?php
/*
 * Created on 17 déc. 2010
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
session_start(); 
require_once 'param_connexion.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mon Blog</title>
<!-- CSS -->
<link href="lib/template/style/css/transdmin.css" rel="stylesheet" type="text/css" media="screen" />
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="screen" href="style/css/ie6.css" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" media="screen" href="style/css/ie7.css" /><![endif]-->

<!-- JavaScripts-->
<script type="text/javascript" src="lib/template/style/js/jquery.js"></script>
<script type="text/javascript" src="lib/template/style/js/jNice.js"></script> 
<!--form action="connexion.php" method="post">
			<p>
			<label>Login:</label>  
			<input type="text" name="login" />
			<label>mot de passe:</label>
			<input type="password" name="mot_de_passe" />
			<input type="submit" value="Valider" />
			<a href= "inscription.php">ou s'inscrire</a><br/>
			<a href= "pass_oublie.php">mot de passe oublie? </a>
			
			</p>
		</form-->
	</head>
	
<body>

<div id="wrapper">
    	<!-- h1 tag stays for the logo, you can use the a tag for linking the index page -->
    	<h1><a href= "index.php"><span>Mon Blog</span></a></h1>
        
        <!-- You can name the links with lowercase, they will be transformed to uppercase by CSS, we prefered to name them with uppercase to have the same effect with disabled stylesheet -->
        <ul id="mainNav">
      
        	<li><a href="#" class="active">ACCUEIL</a></li> <!-- Use the "active" class for the active menu item  -->
        	<li><a href="#">OPTION</a></li>        	     	
        	<li class="logout"><?php 
        	if(sizeof($_SESSION) == 0){
        	echo '<a href = "connexion.php">CONNEXION</a>';	
        	}
        	else{ 
        	echo '<a href = "deconnexion_post.php">DECONNEXION</a>';	
        	}
            ?>
            </li>
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
                <!--h2><a href="#">Dashboard</a> &raquo; <a href="#" class="active">Print resources</a></h2-->                               
                <div id="main">
                	<form action="" class="jNice">
					<h3>Les derniers blogs</h3>
                    	<table cellpadding="0" cellspacing="0">
                    	<?php
$reponse = $conn->query('SELECT TitreBlog, DateCreationCompte FROM Utilisateur ORDER BY DateCreationCompte DESC LIMIT 0, 10');
if ($reponse->num_rows) {
	while ($row = $reponse->fetch_row()) {
		
		echo '<tr>' .
		'<td>';
		echo '<a href="#">' . $row[0] . '</a>' . '</td>' . '<td class="action"><a href="#">' . $row[1] . '</a>' .
		'</td>' .
		'</tr>';
	}
}
$reponse->close();
?>
					                       
                        </table>
					
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
		
 <?php
 //Afichons les derniers blogs crées ou mis à jours
  /*		
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
    
    */
?>
		
		
		
	</body>
</html>