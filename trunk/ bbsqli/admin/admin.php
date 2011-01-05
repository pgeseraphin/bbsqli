<?php require_once 'admin_header.php'; ?>
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
 	
	$("#aj_compte").validate({
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
					required: "Veuillez entrer un Mot de passe."
					,minlength: "Veuillez entrer au moins 6 caractères."
				}
				,confirm_password: {
					required: "Veuillez entrer un Confirmation de mot de passe"
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
        
         <?php require_once '../navigation.php'; ?>
        
        <div id="containerHolder">
			<div id="container">	
				<?php require_once 'admin_side.php'; ?>
						
        		
                
                <!-- h2 stays for breadcrumbs -->
                <h2><a href="#">Administration</a> &raquo; <a href="#" class="active"><?php echo $titre; ?></a></h2>
                
                <div id="main">
                	<form action="" class="jNice">
					<h3> <?php  if(isset($titre)) echo 'Liste des '. $titre; ?></h3>
					<h4><?php


session_start();
if ($_SESSION['curPageName'] == 'admin_supp.php' && $_GET['sup'] == 1) {
	echo '<span style="color : #009900;">Le compte a &eacute;t&eacute; supprim&eacute;</span>';
	$_SESSION['curPageName'] = curPageName();
}
?></h4>
                    	<table cellpadding="0" cellspacing="0">
<?php


$sql = 'SELECT IdUtilisateur, Login, Email' .
' FROM Utilisateur WHERE Type=' . $_GET["cat"];

$results = $conn->query($sql);

if ($results->num_rows) {
	while ($row = $results->fetch_array()) {

		echo '<tr>' .
		'<td>';
		echo $row['Login'] . '</td>' . '<td class="action"><a href="admin_aff.php?idU='.$row['IdUtilisateur'].'" class="view">Afficher</a>' .
		'<a href="admin_edit.php?idU='.$row['IdUtilisateur'].'" class="edit">Editer</a>' .
		'<a href="javascript:supp(' . $row['IdUtilisateur'] . ');" class="delete">Supprimer</a>' .
		'</td>' .
		'</tr>';
	}
} else {
	if (isset ($titre))
		echo '<td>Il n&apos;y a pas de donn&eacute;es &agrave; afficher</td>';
}
?>                   	
							 
                            <!--                      
							<tr>
                                <td>Vivamus rutrum nibh in felis tristique vulputate</td>
                                <td class="action"><a href="#" class="view">View</a><a href="#" class="edit">Edit</a><a href="#" class="delete">Delete</a></td>
                            </tr>  
                            -->                      
                        </table>
                        </form>
					<h3>Cr&eacute;er un nouveau compte</h3>
					<h4><?php


session_start();
if ($_SESSION['curPageName'] == 'admin_creer.php' && $_GET['aj'] == 1) {
	echo '<span style="color : #009900;">Le compte a &eacute;t&eacute; cr&eacute;&eacute;</span>';
	$_SESSION['curPageName'] = curPageName();
}
?></h4>
					<form action="admin_creer.php" id="aj_compte" method="post" class="jNice">
					
                    	<fieldset>
                    		<p><label for="type">Type :</label>
                            <select name="type" id="type">
                            	<option value="2">Mod&eacute;rateur</option>
                            	<option value="1">Administrateur</option>
                            </select>
                            </p>                            
                        	<p><label for="login">Identifiant* (2 caract&egrave;res minimum) :</label>
                        	<input type="text" name="login" id="login" class="text-long" /></p>
                        	<p><label for="password">Mot de passe* (6 caract&egrave;res minimum) :</label>
                        	<input type="password" name="password" id="password" class="text-long" /></p>
                        	<p><label for="password">Confirmation de mot de passe* (6 caract&egrave;res minimum) :</label>
                        	<input type="password" name="confirm_password" id="confirm_password" class="text-long" /></p>
                            <p><label for="email">Email* :</label>
                            <input type="text" name="email" id="email" class="text-long" />
                            </p>
                        	<input type="submit" value="Enregistrer" />
                        </fieldset>
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