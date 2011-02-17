<?php


/*
 * Created on 17 déc. 2010
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

require_once 'param_connexion.php';
require_once 'header.php';
?>

</head>
	
<body>

<div id="wrapper">
    	<!-- h1 tag stays for the logo, you can use the a tag for linking the index page -->
    	<h1><a href= "index.php"><span>Mon Blog</span></a></h1>
        
        <!-- You can name the links with lowercase, they will be transformed to uppercase by CSS, we prefered to name them with uppercase to have the same effect with disabled stylesheet -->
        <?php


include ("navigation.php");
?>
        <!-- // #end mainNav -->
        
        <div id="containerHolder">
			<div id="container">
			    <?php

require_once 'menu.php';
?>
                <!-- // #sidebar -->         
              
                
                <div id="main">
                <h3>Ce test est réalisé sans caractères d'échappement</h3>
                    <div class="faille_exploit">
                    <p>$mot = $_POST['mot_cle'];</p><br/>
                    <p>$sql = "SELECT Login, Prenom, Nom, Email FROM Utilisateur WHERE Login LIKE '$mot%'";</p><br/>
	                <p>$search_result = $conn->query($sql);</p>              
                  
                  </div>
                    
                    <form action="" method="post">					
					<fieldset>
					        <p>Entrer le pseudo de l'utilisateur</p>
                        	<p><input type="text" name="mot_cle" class="text-long" />                       	
                        	<input type="submit" value="Rechercher" /></p> 
                    </fieldset>   
                    </form>    
					 
					<table cellpadding="0" cellspacing="0">
					<?php


if (isset ($_POST['mot_cle'])) {	
	
	if (empty ($_POST['mot_cle']))
		echo '<h3>Veuillez entrer un mot clé</h3>';
	else {
		
		$mot = $_POST['mot_cle'];
		$sql = "SELECT Login, Prenom, Nom, Email FROM Utilisateur WHERE Login LIKE '$mot%'";
		$search_result = $conn->query($sql);
		if ($search_result->num_rows) {
			echo "<h3>Résultat de votre recherche</h3>";
			while ($row = $search_result->fetch_row()) {
				
				echo '<tr><td>Nom : ' . '</td>' . '<td>' . $row[0] . '</td></tr>';
				echo '<tr><td>Prénom : ' . '</td>' . '<td>' . $row[1] . '</td></tr>';				
				echo '<tr><td>Login : ' . '</td>' . '<td>' . $row[2] . '</td></tr>';				
				echo '<tr><td>Email : ' . '</td>' . '<td>' . $row[3] . '</td></tr>';
				echo '<tr><td>***************</td><td>***************</td></tr>';
			}
			
		} else
			echo '<h3>Auccun résultat ne correspond à votre recherche</h3>';
		
		$search_result->close();
	}
	
}
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