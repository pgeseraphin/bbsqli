<div id="sidebar">
    <ul class="sideNav">
         <li><a href="inscription.php">S'inscrire</a></li>                	    
         <li><a href="#">Céer un blog</a></li>                    	
         <li><a href="#">Archives</a></li>
         <?php
          session_start();
          if (isset($_SESSION['user_id'])) 
          	echo '<li><a href="user_profil.php">Mon profil</a></li>';
         ?>
                             	
    </ul>
      <!-- // .sideNav -->
</div>   