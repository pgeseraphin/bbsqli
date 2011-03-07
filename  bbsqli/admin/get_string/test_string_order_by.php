<?php require_once 'admin_header.php'; $active = 4; ?>
<script type="text/javascript" src="style/js/lib.js"></script>
</head>

<body>
	<div id="wrapper">
    	<!-- h1 tag stays for the logo, you can use the a tag for linking the index page -->
    	<h1><a href="#"><span>SQLi Test Platform</span></a></h1>
       
         <?php require_once 'admin_nav.php'; ?>
        
        <div id="containerHolder">
			<div id="container">	
				<?php require_once 'admin_side.php'; ?>
					               
                <!-- h2 stays for breadcrumbs -->
                <h2><a href="#">GET STRING (sans affichage des erreurs)</a></h2>
                
                <div id="main">
                <form action="" class="jNice">
                <br/>
                $order = isset ($_GET['login']) ? $_GET['login'] : '';
                <br/>
$order = $conn->real_escape_string($order);
                <br/><br/>
$sql = 'SELECT Type, Login, Email' .
' FROM Utilisateur ORDER BY "' . $order.'"';
<br/><br/>
					<h3>ORDER BY</h3>
                    	
                <table cellpadding="0" cellspacing="0">                
<?php
$order = isset ($_GET['login']) ? $_GET['login'] : '';
$order = $conn->real_escape_string($order);

$sql = 'SELECT Type, Login, Email' .
' FROM Utilisateur ORDER BY "' . $order.'"';

$results = $conn->query($sql);

if ($results->num_rows) {
	while ($row = $results->fetch_array()) {		
		echo '<tr><td>Type Utilisateur : ' . '</td>' . '<td>' . labelType($row['Type']) . '</td></tr>';
		echo '<tr><td>Identifiant : ' . '</td>' . '<td>' . $row['Login'] . '</td></tr>';
		echo '<tr><td>Email : ' . '</td>' . '<td>' . $row['Email'] . '</td></tr>';
		}
} else {
	echo '<td>Il n&apos;y a pas de donn&eacute;es &agrave; afficher</td>';
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