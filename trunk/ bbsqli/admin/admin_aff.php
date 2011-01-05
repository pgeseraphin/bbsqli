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
	if ($row = $results->fetch_array()) {
		echo '<tr><td></td>' .
		'<td class="action"><a href="admin_edit.php?idU=' . $row['IdUtilisateur'] . '" class="edit">Editer</a>' .
		'<a href="javascript:supp(' . $row['IdUtilisateur'] . ');" class="delete">Supprimer</a></td></tr>';
		echo '<tr><td>Type Utilisateur : ' . '</td>' . '<td>' . labelType($row['Type']) . '</td></tr>';
		echo '<tr><td>Identifiant : ' . '</td>' . '<td>' . $row['Login'] . '</td></tr>';
		echo '<tr><td>Email : ' . '</td>' . '<td>' . $row['Email'] . '</td></tr>';
		echo '<tr><td>Titre Blog : ' . '</td>' . '<td>' . $row['TitreBlog'] . '</td></tr>';
		echo '<tr><td>Pr&eacute;nom : ' . '</td>' . '<td>' . $row['Prenom'] . '</td></tr>';
		echo '<tr><td>Nom : ' . '</td>' . '<td>' . $row['Nom'] . '</td></tr>';
		echo '<tr><td>Sexe : ' . '</td>' . '<td>' . $row['Sexe'] . '</td></tr>';
		echo '<tr><td>Date de Naissance : ' . '</td>' . '<td>' . $row['DateNaissance'] . '</td></tr>';
		echo '<tr><td>Adresse : ' . '</td>' . '<td>' . $row['Adresse'] . '</td></tr>';
		echo '<tr><td>Code Postal : ' . '</td>' . '<td>' . $row['CodePostal'] . '</td></tr>';
		echo '<tr><td>Ville : ' . '</td>' . '<td>' . $row['Ville'] . '</td></tr>';
		echo '<tr><td>Pays : ' . '</td>' . '<td>' . $row['Pays'] . '</td></tr>';
		echo '<tr><td>T&eacute;l Fixe : ' . '</td>' . '<td>' . $row['Telephone'] . '</td></tr>';
		echo '<tr><td>T&eacute;l Portable : ' . '</td>' . '<td>' . $row['Portable'] . '</td></tr>';
		echo '<tr><td>Fax : ' . '</td>' . '<td>' . $row['Fax'] . '</td></tr>';
		echo '<tr><td>A Propos de Moi : ' . '</td>' . '<td>' . $row['AProposDeMoi'] . '</td></tr>';
		echo '<tr><td>Date de Cr&eacute;ation du Compte : ' . '</td>' . '<td>' . $row['DateCreationCompte'] . '</td></tr>';
		echo '<tr><td>Derni&egrave;re Date de Connexion : ' . '</td>' . '<td>' . $row['DerniereDateConnexion'] . '</td></tr>';
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