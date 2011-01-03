<?php
/*
 * Created on 3 janv. 2011
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
            /*
              <!-- You can name the links with lowercase, they will be transformed to uppercase by CSS, we prefered to name them with uppercase to have the same effect with disabled stylesheet -->
        <!--
        <ul id="mainNav">
      
        	<li><a href="#" class="active">ACCUEIL</a></li> <!-- Use the "active" class for the active menu item  >
        	<li><a href="#">OPTION</a></li>        	     	
        	<li class="logout"><?php /*
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
        */
?>
