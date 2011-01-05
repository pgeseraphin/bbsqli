<?php 
require_once 'user_header.php';
require_once 'header.php'; 
?>
<script type="text/javascript" src="admin/style/js/lib.js"></script>
</head>

<body>
	<div id="wrapper">
    	<!-- h1 tag stays for the logo, you can use the a tag for linking the index page -->
    	<h1><a href="#"><span>Mon Blog</span></a></h1>
        
        <!-- You can name the links with lowercase, they will be transformed to uppercase by CSS, we prefered to name them with uppercase to have the same effect with disabled stylesheet -->
        <ul id="mainNav">
        	<li><a href="index.php" class="active">ACCUEIL</a></li> <!-- Use the "active" class for the active menu item  -->
        	<li><a href="#">ADMINISTRATION</a></li>
        	<li><a href="#">OPTION</a></li>
        	<li class="logout"><a href="#">DECONNEXION</a></li>
        </ul>
        <!-- // #end mainNav -->
        
        <div id="containerHolder">
			<div id="container">	
				<?php require_once 'user_side.php'; ?>
						
        		
                
                <!-- h2 stays for breadcrumbs -->
                <h2><a href="#">Administration</a></h2>
                
                <div id="main">
                <form action="" class="jNice">
					<h3>Mon Profil</h3>
                    	
                <table cellpadding="0" cellspacing="0">                
<?php
session_start();

$sql = 'SELECT IdUtilisateur ,Type	,Login ,Email' .
' ,TitreBlog ,Prenom ,Nom ,Sexe ,DateNaissance' .
' ,Adresse	,CodePostal	,Ville ,Pays ,Telephone ,Mobile' .
' ,Fax ,AProposDeMoi' .
' FROM Utilisateur WHERE IdUtilisateur=' . $_SESSION['user_id'];

$results = $conn->query($sql);

if ($results->num_rows) {
	if ($row = $results->fetch_array()) {
		echo '<tr><td></td>' .
		'<td class="action"><a href="user_profil_edit.php?idU=' . $row['IdUtilisateur'] . '" class="edit">Editer</a>';
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
		echo '<tr><td>T&eacute;l Portable : ' . '</td>' . '<td>' . $row['Mobile'] . '</td></tr>';
		echo '<tr><td>Fax : ' . '</td>' . '<td>' . $row['Fax'] . '</td></tr>';
		echo '<tr><td>A Propos de Moi : ' . '</td>' . '<td>' . $row['AProposDeMoi'] . '</td></tr>';
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
        
        <?php require_once 'user_footer.php'; ?>
       
    </div>
    <!-- // #wrapper -->
</body>
</html>

