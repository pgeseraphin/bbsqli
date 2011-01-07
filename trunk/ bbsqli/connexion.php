<?php
/*
 * Created on 2 janv. 2011
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 session_start();
 
require_once 'header.php';
 
?>
  
</head>
<body>

<div id="wrapper">
    	<!-- h1 tag stays for the logo, you can use the a tag for linking the index page -->
    	<h1><a href="#"><span>Mon Blog</span></a></h1>
        
        <!-- You can name the links with lowercase, they will be transformed to uppercase by CSS, we prefered to name them with uppercase to have the same effect with disabled stylesheet -->
       <?php
       include("navigation.php");
       ?>
        <!-- // #end mainNav -->
        
        <div id="containerHolder">
			<div id="container">
        		<div id="sidebar">                	
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->                            
                
                <div id="main">
                <form action="connexion_post.php" methode="post" class="jNice">
                	<h3>Paramètres de connexion</h3>
                    	<fieldset>
                        	<p><label>Login:</label><input type="text" name="login" class="text-long" /></p>
                        	<p><label>Mot de passe:</label><input type="password" name="mot_de_passe" class="text-long" /></p>                        	
                        	<p><a href= "pass_oublie.php">mot de passe oublie? </a></p>
                        	<input type="submit" value="Se connecter" />
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
</body>
</html>

