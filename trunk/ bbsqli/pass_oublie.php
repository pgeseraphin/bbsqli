<?php
/*
 * Created on Dec 15, 2010
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<head>
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Mot de passe oublie</title>		
		<link href="lib/template/style/css/transdmin.css" rel="stylesheet" type="text/css" media="screen" />
	    <script type="text/javascript" src="lib/template/style/js/jquery.js"></script>
        <script type="text/javascript" src="lib/template/style/js/jNice.js"></script>   
	</head>
<body>

<div id="wrapper">
    	<!-- h1 tag stays for the logo, you can use the a tag for linking the index page -->
    	<h1><a href="#"><span>Mon Blog</span></a></h1>
        
        <!-- You can name the links with lowercase, they will be transformed to uppercase by CSS, we prefered to name them with uppercase to have the same effect with disabled stylesheet -->
        <?php
        include("header.php");
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
        
        <p id="footer">Mon Blog &#169; 2010-2011</p>
    </div>
    <!-- // #wrapper -->

 	
</body>
</html>