<?php require_once 'admin_header.php'; ?>
<script type="text/javascript" src="style/js/lib.js"></script>
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
                <h2><a href="#">COOKIE avec string</a></h2>
                
                <div id="main">
                <form action="" class="jNice">
					<h3>Affichage des informations</h3>
                    	
                <table cellpadding="0" cellspacing="0">                
<?php
$search = isset ($_COOKIE['id2']) ? $_COOKIE['id2'] : '';

if ($search != '') {
	$search = $conn->real_escape_string($search);
	$search = addcslashes($search, "%_");

	$sql = 'SELECT `IdUtilisateur`, `Type`,	`Login`, `Email`' .
	' FROM `Utilisateur` WHERE `Login` LIKE "' . $search . '%"';

	$results = $conn->query($sql);
	
//	if(!$results){
//	echo 'Erreur : ' . mysqli_error($conn);
//	
//	}else{
		if ($results->num_rows) {
			while ($row = $results->fetch_array()) {
				echo '<tr><td></td>' .
				'<td class="action"><a href="admin_edit.php?id=' . $row['IdUtilisateur'] . '" class="edit">Editer</a>' .
				'<a href="javascript:supp(' . $row['IdUtilisateur'] . ');" class="delete">Supprimer</a></td></tr>';
				echo '<tr><td>Type Utilisateur : ' . '</td>' . '<td>' . labelType($row['Type']) . '</td></tr>';
				echo '<tr><td>Identifiant : ' . '</td>' . '<td>' . $row['Login'] . '</td></tr>';
				echo '<tr><td>Email : ' . '</td>' . '<td>' . $row['Email'] . '</td></tr>';
			}
		} else {
			echo '<td>Il n&apos;y a pas de donn&eacute;es &agrave; afficher</td>';
		}
	}
//}
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