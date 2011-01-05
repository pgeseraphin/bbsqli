<?php require_once 'moder_header.php'; ?>
<style type="text/css">
label.error { float: none; color: red; padding-left: .5em; vertical-align: top; }
</style>
<script type="text/javascript" src="style/js/jquery.validate.js"></script>
<script type="text/javascript" src="style/js/messages_fr.js"></script>
<script type="text/javascript" src="style/js/lib.js"></script>
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
			}	
			,password: {
				minlength: function(element) {
	  				if($("#password").val() != ""){
						return '6';
					}
				}
			}
			,confirm_password: {
				required: function(element) {
	      			return $("#password").val() != ""
	      		}
				,minlength: function(element) {
	  				if($("#password").val() != ""){
						return '6';
					}
	      		}
				,equalTo: function(element) {
	  				if($("#password").val() != ""){
						return '#password';
					}else{
						$("#confirm_password").rules("remove", "equalTo");

					}				
	      		}
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
					minlength: "Veuillez entrer au moins 6 caractères."
				}
				,confirm_password: {
					minlength: "Veuillez entrer au moins 6 caractères."
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
        
        <?php require_once 'admin_nav.php'; ?>
        
        <div id="containerHolder">
			<div id="container">	
				<?php require_once 'moder_side.php'; ?>
						
        		
                
                <!-- h2 stays for breadcrumbs -->
                <h2><a href="#">Administration</a></h2>
                
                <div id="main">
                <h3>Modifier le compte</h3>
                <h4><?php
session_start();
if ($_SESSION['curPageName'] == 'moder_mod.php' && $_GET['mod'] == 1) {
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
	if ($row = $results->fetch_array()) {

		echo '<table cellpadding="0" cellspacing="0"> <tr><td></td>' .
		'<td class="action"><a href="admin_aff.php?idU='.$row['IdUtilisateur'].'" class="view">Afficher</a>' .
		'<a href="javascript:supp(' . $row['IdUtilisateur'] . ');" class="delete">Supprimer</a></td></tr></table> ' .
		'<form action="moder_mod.php" id="mod_compte" method="post" class="jNice">' .
		'<fieldset>' .
		'<input type="hidden" name="idUtilisateur" id="idUtilisateur" value="' . $row['IdUtilisateur'] . '" />' .
		'<p><label for="type">Type :</label>' .
		'<select name="type" id="type">' .
		'<option value="3" ' . (($row['Type'] == 3) ? "selected='selected'" : "") . '>Utilisateur</option>' .
		'<option value="2" ' . (($row['Type'] == 2) ? "selected='selected'" : "") . '>Mod&eacute;rateur</option>' .
		'<option value="1" ' . (($row['Type'] == 1) ? "selected='selected'" : "") . '>Administrateur</option>' .
		'</select></p>' .
		'<p><label for="login">Identifiant * (2 caract&egrave;res minimum) :</label>' .
		'<input type="text" name="login" id="login" class="text-long" value="' . $row['Login'] . '" /></p>' .
		'<p><label for="password">Mot de passe (6 caract&egrave;res minimum) :</label>' .
		'<input type="password" name="password" id="password" class="text-long" /></p>' .
		'<p><label for="password">Confirmation de mot de passe (6 caract&egrave;res minimum) :</label>' .
		'<input type="password" name="confirm_password" id="confirm_password" class="text-long" /></p>' .
		'<p><label for="email">Email * :</label>' .
		'<input type="text" name="email" id="email" class="text-long" value="' . $row['Email'] . '" />' .
		'</p>' .
		'<p><label for="titreBlog">Titre du Blog :</label>' .
		'<input type="text" name="titreBlog" id="titreBlog" class="text-long" value="' . $row['TitreBlog'] . '" /></p>' .
		'<p><label for="prenom">Pr&eacute;nom :</label>' .
		'<input type="text" name="prenom" id="prenom" class="text-long" value="' . $row['Prenom'] . '" /></p>' .
		'<p><label for="nom">Nom :</label>' .
		'<input type="text" name="nom" id="nom" class="text-long" value="' . $row['Nom'] . '" /></p>' .
		'<p><label for="sexe">Sexe :</label>' .
		'<select name="sexe" id="sexe">' .
		'<option value="" ' . ((is_null($row['Sexe'])) ? "selected='selected'" : "") . '></option>' .
		'<option value="1" ' . (($row['Sexe'] == 1) ? "selected='selected'" : "") . '>Masculin</option>' .
		'<option value="2" ' . (($row['Sexe'] == 2) ? "selected='selected'" : "") . '>F&eacute;minin</option>' .
		'</select></p>' .
		'<p><label for="dateNaiss">Date de Naissance :</label>' .
		'<input type="text" name="dateNaiss" id="dateNaiss" class="text-long" value="' . $row['DateNaissance'] . '" /></p>' .
		'<p><label for="adresse">Adresse :</label>' .
		'<input type="text" name="adresse" id="adresse" class="text-long" value="' . $row['Adresse'] . '" /></p>' .
		'<p><label for="codePostal">Code Postal :</label>' .
		'<input type="text" name="codePostal" id="codePostal" class="text-long" value="' . $row['CodePostal'] . '" /></p>' .
		'<p><label for="ville">Ville :</label>' .
		'<input type="text" name="ville" id="ville" class="text-long" value="' . $row['Ville'] . '" /></p>' .
		'<p><label for="pays">Pays :</label>' .
		'<input type="text" name="pays" id="pays" class="text-long" value="' . $row['Pays'] . '" /></p>' .
		'<p><label for="telFixe">T&eacute;l Fixe :</label>' .
		'<input type="text" name="telFixe" id="telFixe" class="text-long" value="' . $row['Telephone'] . '" /></p>' .
		'<p><label for="telPort">T&eacute;l Portable :</label>' .
		'<input type="text" name="telPort" id="telPort" class="text-long" value="' . $row['Mobile'] . '" /></p>' .
		'<p><label for="fax">Fax :</label>' .
		'<input type="text" name="fax" id="fax" class="text-long" value="' . $row['Fax'] . '" /></p>' .
		'<p><label for="aboutMe">A Propos de Moi :</label>' .
		'<textarea name="aboutMe" id="aboutMe" rows="1" cols="1"  >' . $row['AProposDeMoi'] . '</textarea></p>' .

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