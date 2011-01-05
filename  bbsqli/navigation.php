<?php
/*
 * Created on 5 janv. 2011
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
 echo '<ul id="mainNav">
      
        	<li><a href= "index.php" class="active">ACCUEIL</a></li> <!-- Use the "active" class for the active menu item  -->
        	<li><a href="#">OPTION</a></li>        	     	
        	<li class="logout">';
        	if(sizeof($_SESSION) == 0){
        	echo '<a href = "connexion.php">CONNEXION</a>';	
        	}
        	else{ 
        	echo '<a href = "deconnexion_post.php">DECONNEXION</a>';	
        	}
            echo '</li></ul>';
?>
