<div id="sidebar">
    <ul class="sideNav">
         <li><a href="inscription.php">S'inscrire</a></li>                	    
         <li><a href="#">Céer un blog</a></li>                    	
         <li><a href="#">Archives</a></li>
         <li><a title= "Post->String: sans protection" href="test_connexion.php">Authentification [string]</a></li>
         <li><a title= "Post->String: avec protection" href="test_connexion_escape_string.php">Authent. [string]+Escape  </a></li>
         <li><a title= "Post->Int: sans protection" href="test_connexion_int.php">Authent. [int]</a></li>
         <li><a title= "Post->Int: avec Escape" href="test_connexion_int_fixed1.php">Authent. [int]+Escape </a></li>
         <li><a title= "Post->Int: avec Escape+Guillemet" href="test_connexion_int_fixed2.php">Authent. [int]+Guillemet </a></li>
         <li><a title= "Post->Int: avec Escape+Guillemet+Intval" href="test_connexion_int_fixed3.php">Authent. [int]+Inval </a></li>

         <li><a title= "Post-> Like: Escape" href="test_findUser_escape_string.php">Trouver un user 1</a></li>
         <li><a title= "Post-> Like: Escape+addcslashes" href="test_findUser_addcslashes.php">Trouver un user 2</a></li>
         
         <li><a title= "Post-> Limit: Escape" href="test_search.php">Liste des Users 1</a></li>
         <li><a title= "Post-> Limit: Guillemet+Intval" href="test_search_fixed1.php">Liste des Users 2</a></li>
         <li><a title= "Post-> Limit: is_numeric" href="test_search_fixed2.php">Liste des Users 3</a></li>
         <li><a title= "Post-> Order by: + Escape" href="test_order_by.php">Liste des Users 4</a></li>
         <li><a title= "Post-> Order by: + quote" href="test_order_by_fixed.php">Liste des Users 5</a></li>
         <?php
          session_start();
          if (isset($_SESSION['user_id'])) 
          	echo '<li><a href="user_profil.php">Mon profil</a></li>';
         ?>
                             	
    </ul>
      <!-- // .sideNav -->
</div>   