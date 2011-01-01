<?php require_once 'admin_header.php'; ?>
<script type="text/javascript" src="style/js/lib.js"></script>
</head>

<body>
	<div id="wrapper">
    	<!-- h1 tag stays for the logo, you can use the a tag for linking the index page -->
    	<h1><a href="#"><span>Mon Blog</span></a></h1>
        
        <!-- You can name the links with lowercase, they will be transformed to uppercase by CSS, we prefered to name them with uppercase to have the same effect with disabled stylesheet -->
        <ul id="mainNav">
        	<li><a href="../index.php" class="active">ACCUEIL</a></li> <!-- Use the "active" class for the active menu item  -->
        	<li><a href="#">ADMINISTRATION</a></li>
        	<li><a href="#">OPTION</a></li>
        	<li class="logout"><a href="#">DECONNEXION</a></li>
        </ul>
        <!-- // #end mainNav -->
        
        <div id="containerHolder">
			<div id="container">	
				<?php require_once 'admin_side.php'; ?>
						
        		
                
                <!-- h2 stays for breadcrumbs -->
                <h2><a href="#">Administration</a></h2>
                
                <div id="main">
                <form action="" class="jNice">
					<h3>Affichage des informations</h3>
                    	
                <table cellpadding="0" cellspacing="0">                
<?php
$sql = 'SELECT IdUtilisateur, Type,	Login, Email' .
' ,TitreBlog, Prenom, Nom, Sexe, DateNaissance' .
' ,Adresse,	CodePostal,	Ville, Pays, Telephone, Mobile' .
' ,Fax,	AProposDeMoi, DateCreationCompte, DerniereDateConnexion' .
' FROM Utilisateur WHERE IdUtilisateur=' . $_GET["idU"];

$results = $conn->query($sql);

if ($results->num_rows) {
	if ($row = $results->fetch_row()) {
		echo '<tr><td></td>' .
				'<td class="action"><a href="admin_edit.php?idU='.$row[0].'" class="edit">Editer</a>' .
					'<a href="javascript:supp(' . $row[0] . ');" class="delete">Supprimer</a></td></tr>';
		echo '<tr><td>Type Utilisateur : ' . '</td>' . '<td>' . labelType($row[1]) . '</td></tr>';
		echo '<tr><td>Identifiant : ' . '</td>' . '<td>' . $row[2] . '</td></tr>';
		echo '<tr><td>Email : ' . '</td>' . '<td>' . $row[3] . '</td></tr>';
		echo '<tr><td>Titre Blog : ' . '</td>' . '<td>' . $row[4] . '</td></tr>';
		echo '<tr><td>Pr&eacute;nom : ' . '</td>' . '<td>' . $row[5] . '</td></tr>';
		echo '<tr><td>Nom : ' . '</td>' . '<td>' . $row[6] . '</td></tr>';
		echo '<tr><td>Sexe : ' . '</td>' . '<td>' . $row[7] . '</td></tr>';
		echo '<tr><td>Date de Naissance : ' . '</td>' . '<td>' . $row[8] . '</td></tr>';
		echo '<tr><td>Adresse : ' . '</td>' . '<td>' . $row[9] . '</td></tr>';
		echo '<tr><td>Code Postal : ' . '</td>' . '<td>' . $row[10] . '</td></tr>';
		echo '<tr><td>Ville : ' . '</td>' . '<td>' . $row[11] . '</td></tr>';
		echo '<tr><td>Pays : ' . '</td>' . '<td>' . $row[12] . '</td></tr>';
		echo '<tr><td>T&eacute;l Fixe : ' . '</td>' . '<td>' . $row[13] . '</td></tr>';
		echo '<tr><td>T&eacute;l Portable : ' . '</td>' . '<td>' . $row[14] . '</td></tr>';
		echo '<tr><td>Fax : ' . '</td>' . '<td>' . $row[15] . '</td></tr>';
		echo '<tr><td>A Propos de Moi : ' . '</td>' . '<td>' . $row[16] . '</td></tr>';
		echo '<tr><td>Date de Cr&eacute;ation du Compte : ' . '</td>' . '<td>' . $row[17] . '</td></tr>';
		echo '<tr><td>Derni&egrave;re Date de Connexion : ' . '</td>' . '<td>' . $row[18] . '</td></tr>';
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