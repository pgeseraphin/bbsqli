<?php

/*
 * Created on Dec 15, 2010
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
require_once 'header.php';
?>
</head>
<body>

<div id="wrapper">
    	<!-- h1 tag stays for the logo, you can use the a tag for linking the index page -->
    	<h1><a href="#"><span>Mon Blog</span></a></h1>
        
        <!-- You can name the links with lowercase, they will be transformed to uppercase by CSS, we prefered to name them with uppercase to have the same effect with disabled stylesheet -->
        <?php

include ("navigation.php");
?>
        <!-- // #end mainNav -->
        
        <div id="containerHolder">
			<div id="container">
        		<div id="sidebar">                	
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->                            
                
                <div id="main">
                <form action="pass_oublie_post.php" methode="post" >
                	<h3>vous avez oublié votre mot de passe?</h3>
                    	<fieldset>
                        	<p><label>Votre email:</label><input type="text" name="mot_de_passe" class="text-long" />                        	
                        	<input type="submit" value="Envoyer" /></p>
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
