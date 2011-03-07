<?php


/*
 * Created on 17 déc. 2010
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
session_start();
//require_once 'param_connexion.php';
require_once 'header.php';
?>

</head>
	
<body>

<div id="wrapper">
    	<!-- h1 tag stays for the logo, you can use the a tag for linking the index page -->
    	<h1><a href= "index.php"><span>SQLi Test Platform</span></a></h1>
        
        <!-- You can name the links with lowercase, they will be transformed to uppercase by CSS, we prefered to name them with uppercase to have the same effect with disabled stylesheet -->
        <?php


include ("navigation.php");
?>
        <!-- // #end mainNav -->
        
        <div id="containerHolder">
			<div id="container">
			   <div id="sidebar">  
        		    <ul class="sideNav"> 
        		     <li><a title= "Post-> Limit: Escape" href="test_search.php">Liste des Users 1</a></li>
                     <li><a title= "Post-> Limit: Guillemet+Intval" href="test_search_fixed1.php">Liste des Users 2</a></li>
                     <li><a title= "Post-> Limit: is_numeric" href="test_search_fixed2.php" class="active">Liste des Users 3</a></li>
        		    </ul>              	
                    <!-- // .sideNav -->
                </div>  
                <!-- // #sidebar -->
                
                <!-- h2 stays for breadcrumbs -->
                <!--h2><a href="#">Dashboard</a> &raquo; <a href="#" class="active">Print resources</a></h2-->                               
                
                <div id="main">
                
                  <h3>Test de vulnérabilité : la clause LIMIT</h3>
                  <div class="faille_exploit">
                    <p>$offset = isset ($_POST['mot_cle']) ? $_POST['mot_cle'] : 0;</p><br/>
                    <p>$offset = is_numeric($offset)</p><br/>
                    <p>$reponse = $conn->query("SELECT Login, Prenom, Nom, Email FROM Utilisateur LIMIT $offset, 6");</p>                         
                  
                  </div>    
                    <form action="" method="post">					
					<fieldset>
					        <p>Numéro de page: </p>
                        	<p><input type="text" name="mot_cle" class="text-medium" />                       	
                        	<input type="submit" value="Rechercher" /></p> 
                    </fieldset>   
                    </form>    
					 
					<table cellpadding="0" cellspacing="0">
					<?php



$offset = isset ($_POST['mot_cle']) ? $_POST['mot_cle'] : 0;
if (is_numeric($offset)){ 
	$reponse = $conn->query("SELECT Login, Prenom, Nom, Email FROM Utilisateur LIMIT $offset, 6");
	if(!$reponse)
			echo '<span style="color : red;">Erreur :' .  $conn->error . '</span>';
		else{
	if ($reponse->num_rows) {
		//echo '<tr><td><strong>Titre du blog</strong></td><td class="action"><strong>Dernière date de mise à jour</strong></td></tr>';
		while ($row = $reponse->fetch_row()) {
			
			echo '<tr><td>Nom : ' . '</td>' . '<td>' . $row[0] . '</td></tr>';
			echo '<tr><td>Prénom : ' . '</td>' . '<td>' . $row[1] . '</td></tr>';				
			echo '<tr><td>Login : ' . '</td>' . '<td>' . $row[2] . '</td></tr>';				
			echo '<tr><td>Email : ' . '</td>' . '<td>' . $row[3] . '</td></tr>';
			echo '<tr><td>***************</td><td>***************</td></tr>';
		}
	}
	else
		echo'<h3>Entrer un numéro valide</h3>';
	
	$reponse->close();
}}
else
	echo'<h3>Entrer un numéro valide</h3>';
	
?>  
</table>   
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