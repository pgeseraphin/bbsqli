<div id="sidebar">
    <ul class="sideNav">
         <li><a href="inscription.php">S'inscrire</a></li>                	    
         <li><a href="#">Céer un blog</a></li>                    	
         <li><a href="#">Archives</a></li>
         <li><a title= "Post->String: sans protection" href="test_connexion.php">Authentification [string]</a></li>
         <li><a title= "Post->String: avec protection" href="test_connexion_escape_string.php">Authent. [string]+escape  </a></li>
         <li><a title= "Post->Int: sans protection" href="test_connexion_int.php">Authent. [int]</a></li>
         <li><a title= "Post->Int: avec escape" href="test_connexion_int_fixed1.php">Authent. [int]+escape </a></li>
         <li><a href="test_findUser.php">Trouver un user 1</a></li>
         <li><a href="test_findUser_escape_string.php">Trouver un user 2</a></li>
         <li><a href="test_search.php">Trouver un Blog 1</a></li>
         <li><a href="test_search_fixed.php">Trouver un Blog 2</a></li>
         <?php
          session_start();
          if (isset($_SESSION['user_id'])) 
          	echo '<li><a href="user_profil.php">Mon profil</a></li>';
         ?>
                             	
    </ul>
      <!-- // .sideNav -->
</div>   