
<?php
/*
 * Created on 17 déc. 2010
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
    	<!-- h1 tag stays for the logo, you can use the a tag for linking the index page -->
    	<h1><a href= "index.php"><span>Mon article</span></a></h1>
        
        <!-- You can name the links with lowercase, they will be transformed to uppercase by CSS, we prefered to name them with uppercase to have the same effect with disabled stylesheet -->
        <?php 
        include("navigation.php");
        
              ?>
        <!-- // #end mainNav -->
        
        <div id="containerHolder">
			<div id="container">
        		<div id="sidebar">
                	<ul class="sideNav">
                	    <li><a href="inscription.php">S'inscrire</a></li>                	    
                    	<li><a href="creer_blog.php">Ajouter une publication</a></li>
                    	<li><a href="voir_article.php">voir publication</a></li>                     	
                    	<li><a href="#">Archives</a></li>
                    	<li><a href="user_profil.php">Mon profil</a></li>
                    	
                    </ul>
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->
                
                <!-- h2 stays for breadcrumbs -->
                <!--h2><a href="#">Dashboard</a> &raquo; <a href="#" class="active">Print resources</a></h2-->                               
               
                <div id="main">
                <form action="creer_blog_post.php" method="post" class="jNice">
                	<h3>Creer un article</h3>
                    	<fieldset>                        	
                        	<p><label>Titre de l'article:</label><input type="text" name="titre" class="text-long" style="width:366px"/></p>
                        	<p><label>Contenu du blog:</label><textarea type="text" name="contenu" onClick="blank()" class="contenu"></textarea></p>    	
                           	                          	
                           	<input type="submit" name="valider" id ="vlider" value="valider" style="width:150px"/>
                        </fieldset>
                    </form>
                
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
		
 <?php
?>
		
		
		
	</body>
</html>