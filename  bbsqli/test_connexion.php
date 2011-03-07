<?php


/*
 * Created on 2 janv. 2011
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
session_start();
require_once 'param_connexion.php';
require_once 'header.php';
?>
  
</head>
<body>

<div id="wrapper">
    	
    	<h1><a href="#"><span>SQLi Test Platform</span></a></h1>
        
        <!-- You can name the links with lowercase, they will be transformed to uppercase by CSS, we prefered to name them with uppercase to have the same effect with disabled stylesheet -->
       <?php


include ("navigation.php");
?>
        <!-- // #end mainNav -->
        
        <div id="containerHolder">
			<div id="container">
        		<div id="sidebar">  
        		<ul class="sideNav">         
                  <li><a title= "Post->String: sans protection" href="test_connexion.php" class="active">1. Authentification[string] </a></li>
                  <li><a title= "Post->String: Escape" href="test_connexion_escape_string.php">2. Authentification[string]  </a></li>
                  <li><a title= "Post->String: Escape+guillemet" href="test_connexion_escape_guillemet.php">3. Authentification[string]</a></li>
                            	
                 </ul>              	
                    <!-- // .sideNav -->
                </div>  
                  
                <!-- // #sidebar -->                            
                
                <div id="main">
                <h3>Paramètres d'authentification sans échappement des caractères spéciaux</h3>
                
                 <div class="faille_exploit">
                    <p>$login = $_POST['login'];</p><br/>
                    <p>$pwd = $_POST['mot_de_passe'];</p><br/>
                    <p>$sql = "SELECT IdUtilisateur, Login, Type, Email FROM Utilisateur WHERE Login = '$login' AND Password = '$pwd'";</p>
                         
                 </div>
                <form action="" method="post" class="jNice">
                    	<fieldset>
                        	<p><label>Login:</label><input type="text" name="login" class="text-long" /></p>
                        	<p><label>Mot de passe:</label><input type="password" name="mot_de_passe" class="text-long" /></p>                        	
                        	<p><a href= "">mot de passe oublie? </a></p>
                        	<input type="submit" value="Se connecter" />
                        </fieldset>
                    </form>             
                                  
                
                <?php


//$valide = (!empty ($_REQUEST['login']) AND !empty ($_REQUEST['mot_de_passe']));
$valide = (isset ($_POST['login']) AND isset ($_POST['mot_de_passe']) AND !empty($_POST['login']) AND !empty($_POST['mot_de_passe']));


if ($valide) {
	$login = $_POST['login'];
    $pwd = $_POST['mot_de_passe'];
	$sql = "SELECT IdUtilisateur, Login, Type, Email FROM Utilisateur WHERE Login = '$login' AND Password = '$pwd'";	
	$resultat = $conn->query($sql);
	if ($resultat->num_rows > 0) {
		
		$obj = $resultat->fetch_object();
		$_SESSION['user_id'] = $obj->IdUtilisateur;
		$_SESSION['user_login'] = $obj->Login;
		$_SESSION['user_type'] = $obj->Type;		

		header('Location: user_profil.php');
	} else {

		//echo " Echec d'authentification ";
		echo '<span style="color : red;">Echec d\'authentification</span>';
		//header('Location: test_connexion.php');
	}
	$resultat->close();
	$conn->close();

}
?>
</div>
                <!-- // #main -->
                
                <div class="clear"></div>
            </div>
            <!-- // #container -->
        </div>	
        <!-- // #containerHolder -->
        
        <?php require_once 'footer.php'; ?>
    </div>
    <!-- // #wrapper --> 	
</body>
</html>

