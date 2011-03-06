<?php require_once 'admin_header.php'; $active = 1; ?>
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
                <h2><a href="#">HEADER (avec affichage des erreurs)</a></h2>
                
                <div id="main">
                <form action="" class="jNice">
					<br/>
					$user_agent = isset ($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
<br/><br/>
$sql = 'SELECT IdHeader, Type, Valeur' .
' FROM Header WHERE Valeur="' . $user_agent.'"';
<br/><br/>

<h3>Sans protection</h3>
                    	
                <table cellpadding="0" cellspacing="0">                
<?php
$user_agent = isset ($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';

$sql = 'SELECT IdHeader, Type, Valeur' .
' FROM Header WHERE Valeur="' . $user_agent . '"';

$results = $conn->query($sql);
if (!$results) {
	echo 'Erreur : ' . mysqli_error($conn);

} else {
if ($results->num_rows) {
	if ($row = $results->fetch_array()) {
		echo '<tr><td>ID : ' . '</td>' . '<td>' . $row['IdHeader'] . '</td></tr>';
		echo '<tr><td>Type : ' . '</td>' . '<td>' . $row['Type'] . '</td></tr>';
		echo '<tr><td>Valeur : ' . '</td>' . '<td>' . $row['Valeur'] . '</td></tr>';
	}
} else {
	echo '<td>Il n&apos;y a pas de donn&eacute;es &agrave; afficher</td>';
}
}
?> 
</table> 
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