<?php require_once 'admin_header.php'; $active = 2; ?>
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
                <br/>
$user_agent = $conn->real_escape_string($user_agent);
<br/><br/>
$sql = 'SELECT IdHeader, Type, Valeur' .
' FROM Header WHERE Valeur="' . $user_agent . '"';
<br/><br/>
					<h3>Escape</h3>
                    	
                <table cellpadding="0" cellspacing="0">                
<?php
$user_agent = isset ($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
$user_agent = $conn->real_escape_string($user_agent);

$sql = 'SELECT IdHeader, Type, Valeur' .
' FROM Header WHERE Valeur="' . $user_agent . '"';

$results = $conn->query($sql);

if(!$results){
	echo 'Erreur : ' . mysqli_error($conn);
	
}else{
if ($results->num_rows) {
	if ($row = $results->fetch_array()) {
		echo '<tr><td>ID : ' . '</td>' . '<td>' . $row['IdHeader'] . '</td></tr>';
		echo '<tr><td>Type : ' . '</td>' . '<td>' . $row['Type'] . '</td></tr>';
		echo '<tr><td>Valeur : ' . '</td>' . '<td>' . $row['Valeur'] . '</td></tr>';
	}
} else {
	echo 'Votre HTTP_USER_AGENT n&#39;existe pas dans la BD.<br/><br/>';
	
	$sql = 'INSERT INTO Header (Type, Valeur)' .
	' VALUES ("HTTP_USER_AGENT", "' . $user_agent . '")';
	
	if ($conn->query($sql)) {
		echo 'Votre HTTP_USER_AGENT &agrave &eacute;t&eacute; ins&eacute;r&eacute; dans la BD.<br/><br/>';
		echo 'HTTP_USER_AGENT : '.$user_agent.'<br/><br/>';
	}
}
}
?> 
</table>   	
                	
                	
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