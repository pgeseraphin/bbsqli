<?php
require_once 'param_connexion.php';
require_once 'header.php';
?>

</head>
	
<body>

<div id="wrapper">
    	<!-- h1 tag stays for the logo, you can use the a tag for linking the index page -->
    	<h1><a href= "index.php"><span>Mon Blog</span></a></h1>
        
        <!-- You can name the links with lowercase, they will be transformed to uppercase by CSS, we prefered to name them with uppercase to have the same effect with disabled stylesheet -->
        <?php

require_once 'nav_cookie.php';
?>
        <!-- // #end mainNav -->
        
        <div id="containerHolder">
			<div id="container">
			     <div id="sidebar">  
        		    <ul class="sideNav"> 
        		     <li><a href="admin/cookie/test_COOKIE_int.php">COOKIE INT (sans erreur)</a></li>
        		     <li><a href="admin/cookie_erreur/test_COOKIE_int_erreur.php">COOKIE INT (avec erreur)</a></li>         		     
        		    <li><a href="admin/cookie_string/test_COOKIE_string_.php">COOKIE STR (sans err.)</a></li>
        		     <li><a href="admin/cookie_string_erreur/test_COOKIE_string_erreur.php">COOKIE STR (avec err.)</a></li>         		     
        		   </ul>              	
                    <!-- // .sideNav -->
                </div>  
                <!-- // #sidebar -->
                
                <!-- h2 stays for breadcrumbs -->
                <!--h2><a href="#">Dashboard</a> &raquo; <a href="#" class="active">Print resources</a></h2-->                               
                
                <div id="main">
                
                    <form action="">					
					
           
                	<form action="" class="jNice">
					<h3>Cliquez sur un &eacute;l&eacute;ment du menu pour effectuer votre choix</h3>
                    	
					
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
