<?php require_once 'admin_header.php'; ?>
<style type="text/css">
label.error { float: none; color: red; padding-left: .5em; vertical-align: top; }
</style>
<script type="text/javascript" src="style/js/jquery.validate.js"></script>
<script type="text/javascript" src="style/js/messages_fr.js"></script>
<script language="javascript" type="text/javascript">
function supp(idU)
	 {
	     if (confirm('Voulez-vous vraiment supprimer cette ligne ?')) {
	         window.location.href = 'admin_supp.php?idU=' + idU;
	     }
	 }
</script>
<script>
 $(document).ready(function() {	 	 
 	
 	 jQuery.validator.addMethod("noSpace", function(value, element){ 
		  return value.indexOf(" ") < 0 && value != ""; 
	 }, "N'entrez pas d'espace dans le champ Identifiant");
 	
	$("#mod_compte").validate({
		rules: {
	    	type: {
				required: true							
			}
			,login: {
				required: true
				,noSpace: true
				,minlength: 2
				,remote: "check_login.php"
			}	
			,password: {
				required: true
				,minlength: 6
			}
			,confirm_password: {
				required: true
				,minlength: 6
				,equalTo: "#password"
			}
			,email: {
				required: true
				,email: true
			}			
	    	,messages: {
		    	type: "Veuillez selectionnez un type."
		    	,login: {
					required: "Veuillez entrer un Identifiant."
					,minlength: "Veuillez entrer au moins 2 caractères."
					,remote: "Cet Identifiant existe d&eacute;j&agrave;."					
				}
		    	,password: {
					,minlength: "Veuillez entrer au moins 6 caractères."
				}
				,confirm_password: {
					,minlength: "Veuillez entrer au moins 6 caractères."
					,equalTo: "Le Mot de passe et la Confirmation doivent correspondre."
				}
		    	,email: "Veuillez entrer une adresse email valide."				
	    	}	
		}	
	});
});
</script>
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
                <h3>Modifier le compte</h3>
                <h4><?php
session_start();
if ($_SESSION['curPageName'] == 'admin_mod.php' && $_GET['mod'] == 1) {
	echo '<span style="color : #009900;">Le compte a &eacute;t&eacute; modifi&eacute;e</span>';
	$_SESSION['curPageName'] = curPageName();
}
?></h4>
                         
<?php


$sql = 'SELECT IdUtilisateur ,Type	,Login ,Email' .
' ,TitreBlog ,Prenom ,Nom ,Sexe ,DateNaissance ,Photo' .
' ,Adresse ,CodePostal ,Ville ,Pays ,Telephone ,Mobile' .
' ,Fax ,AProposDeMoi' .
' FROM Utilisateur WHERE IdUtilisateur=' . $_GET["idU"];

$results = $conn->query($sql);

if ($results->num_rows) {
	if ($row = $results->fetch_row()) {

		echo '<table cellpadding="0" cellspacing="0"> <tr><td></td>' .
		'<td class="action"><a href="admin_aff.php?idU='.$row[0].'" class="view">Afficher</a>' .
		'<a href="javascript:supp(' . $row[0] . ');" class="delete">Supprimer</a></td></tr></table> ' .
		'<form action="admin_mod.php" id="mod_compte" method="post" class="jNice">' .
		'<fieldset>' .
		'<input type="hidden" name="idUtilisateur" id="idUtilisateur" value="' . $row[0] . '" />' .
		'<p><label for="type">Type :</label>' .
		'<select name="type" id="type">' .
		'<option value="3" ' . (($row[1] == 3) ? "selected='selected'" : "") . '>Utilisateur</option>' .
		'<option value="2" ' . (($row[1] == 2) ? "selected='selected'" : "") . '>Mod&eacute;rateur</option>' .
		'<option value="1" ' . (($row[1] == 1) ? "selected='selected'" : "") . '>Administrateur</option>' .
		'</select></p>' .
		'<p><label for="login">Identifiant * (2 caract&egrave;res minimum) :</label>' .
		'<input type="text" name="login" id="login" class="text-long" value="' . $row[2] . '" /></p>' .
		'<p><label for="password">Mot de passe (6 caract&egrave;res minimum) :</label>' .
		'<input type="password" name="password" id="password" class="text-long" /></p>' .
		'<p><label for="password">Confirmation de mot de passe (6 caract&egrave;res minimum) :</label>' .
		'<input type="password" name="confirm_password" id="confirm_password" class="text-long" /></p>' .
		'<p><label for="email">Email * :</label>' .
		'<input type="text" name="email" id="email" class="text-long" value="' . $row[3] . '" />' .
		'</p>' .
		'<p><label for="titreBlog">Titre du Blog :</label>' .
		'<input type="text" name="titreBlog" id="titreBlog" class="text-long" value="' . $row[4] . '" /></p>' .
		'<p><label for="prenom">Pr&eacute;nom :</label>' .
		'<input type="text" name="prenom" id="prenom" class="text-long" value="' . $row[5] . '" /></p>' .
		'<p><label for="nom">Nom :</label>' .
		'<input type="text" name="nom" id="nom" class="text-long" value="' . $row[6] . '" /></p>' .
		'<p><label for="sexe">Sexe :</label>' .
		'<select name="sexe" id="sexe">' .
		'<option value="" ' . (($row[7] == NULL) ? "selected='selected'" : "") . '></option>' .
		'<option value="1" ' . (($row[7] == 1) ? "selected='selected'" : "") . '>Masculin</option>' .
		'<option value="2" ' . (($row[7] == 2) ? "selected='selected'" : "") . '>F&eacute;minin</option>' .
		'</select></p>' .
		'<p><label for="dateNaiss">Date de Naissance :</label>' .
		'<input type="text" name="dateNaiss" id="dateNaiss" class="text-long" value="' . $row[8] . '" /></p>' .
		'<p><label for="adresse">Adresse :</label>' .
		'<input type="text" name="adresse" id="adresse" class="text-long" value="' . $row[10] . '" /></p>' .
		'<p><label for="codePostal">Code Postal :</label>' .
		'<input type="text" name="codePostal" id="codePostal" class="text-long" value="' . $row[11] . '" /></p>' .
		'<p><label for="ville">Ville :</label>' .
		'<input type="text" name="ville" id="ville" class="text-long" value="' . $row[12] . '" /></p>' .
		'<p><label for="pays">Pays :</label>' .
		'<input type="text" name="pays" id="pays" class="text-long" value="' . $row[13] . '" /></p>' .
		'<p><label for="telFixe">T&eacute;l Fixe :</label>' .
		'<input type="text" name="telFixe" id="telFixe" class="text-long" value="' . $row[14] . '" /></p>' .
		'<p><label for="telPort">T&eacute;l Portable :</label>' .
		'<input type="text" name="telPort" id="telPort" class="text-long" value="' . $row[15] . '" /></p>' .
		'<p><label for="fax">Fax :</label>' .
		'<input type="text" name="fax" id="fax" class="text-long" value="' . $row[16] . '" /></p>' .
		'<p><label for="aboutMe">A Propos de Moi :</label>' .
		'<textarea name="aboutMe" id="aboutMe" rows="1" cols="1"  >' . $row[17] . '</textarea></p>' .

		'<input type="submit" value="Modifier" />
		                </fieldset>
		            </form>';

	}
} else {
	echo '<td>Il n&apos;y a pas de donn&eacute;es &agrave; afficher</td>';
}
?> 
  	



					
					
                	
                	
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