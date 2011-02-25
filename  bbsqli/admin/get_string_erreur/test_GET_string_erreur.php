<?php require_once 'admin_header.php'; ?>
<script type="text/javascript" src="../style/js/lib.js"></script>
</head>

<body>
	<div id="wrapper">
    	<!-- h1 tag stays for the logo, you can use the a tag for linking the index page -->
    	<h1><a href="#"><span>Mon Blog</span></a></h1>
       
         <?php require_once 'admin_nav.php'; ?>
        
        <div id="containerHolder">
			<div id="container">	
				<?php require_once 'admin_side.php'; ?>
					               
                <!-- h2 stays for breadcrumbs -->
                <h2><a href="#">GET STRING (avec affichage des erreurs)</a></h2>
                
                <div id="main">
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
        
        <?php require_once 'admin_footer.php'; ?>
       
    </div>
    <!-- // #wrapper -->
</body>
</html>

