<div id="sidebar">
    <ul class="sideNav">
         <li><a href="inscription.php">S'inscrire</a></li>                	    
         <li><a href="#">Céer un blog</a></li>                    	
         <li><a href="#">Archives</a></li>
         <li><a title= "Post->String: sans protection" href="test_connexion.php">1. Authentification[string] </a></li>
         <li><a title= "Post->String: Escape" href="test_connexion_escape_string.php">2. Authentification[string]  </a></li>
         <li><a title= "Post->String: Escape+guillemet" href="test_connexion_escape_guillemet.php">3. Authentification[string]</a></li>
         <li><a title= "Post->Int: sans protection" href="test_connexion_int.php">4. Authent.[int]</a></li>
         <li><a title= "Post->Int: avec Escape" href="test_connexion_int_fixed1.php">5. Authent. [int]+Escape </a></li>
         <li><a title= "Post->Int: avec Escape+Guillemet" href="test_connexion_int_fixed2.php">6. Authent. [int]+Guillemet </a></li>
         <li><a title= "Post->Int: avec Escape+Guillemet+Intval" href="test_connexion_int_fixed3.php">7. Authent. [int]+Inval </a></li>

         <li><a title= "Post-> Like: Escape" href="test_findUser_escape_string.php">8. Trouver un user 1</a></li>
         <li><a title= "Post-> Like: Escape+addcslashes" href="test_findUser_addcslashes.php">9. Trouver un user 2</a></li>
         
         <li><a title= "Post-> Limit: Escape" href="test_search.php">10. Liste des Users 1</a></li>
         <li><a title= "Post-> Limit: Guillemet+Intval" href="test_search_fixed1.php">11. Liste des Users 2</a></li>
         <li><a title= "Post-> Limit: is_numeric" href="test_search_fixed2.php">12. Liste des Users 3</a></li>
         
         <li><a title= "Post-> Order by: + Escape" href="test_order_by.php">13. Liste des Users 4</a></li>
         <li><a title= "Post-> Order by: + quote" href="test_order_by_fixed.php">14. Liste des Users 5</a></li>
         <?php
          session_start();
          if (isset($_SESSION['user_id'])) 
          	echo '<li><a href="user_profil.php">Mon profil</a></li>';
         ?>
                             	
    </ul>
      <!-- // .sideNav -->
</div>   