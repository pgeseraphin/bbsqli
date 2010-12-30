<?php
require_once 'db.php';
require_once 'lib.php';

session_start();
$_SESSION['curPageURL'] = curPageURL();

//pour obtenir le lien actif (variable 'cat')
switch ($_GET["cat"]) {
	case 1 :
		$titre = 'Administrateurs';
		$active = 1;
		break;
	case 2 :
		$titre = 'Mod&eacute;rateurs';
		$active = 2;
		break;
	case 3 :
		$titre = 'Utilisateurs';
		$active = 3;
		break;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mon Blog - Administration</title>

<!-- CSS -->
<link href="style/css/transdmin.css" rel="stylesheet" type="text/css" media="screen" />
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="screen" href="style/css/ie6.css" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" media="screen" href="style/css/ie7.css" /><![endif]-->
<style type="text/css">
label.error { float: none; color: red; padding-left: .5em; vertical-align: top; }
</style>


<!-- JavaScripts-->
<script type="text/javascript" src="style/js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="style/js/jNice.js"></script>
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
        		<div id="sidebar">
                	<ul class="sideNav">
                    	<li><a href="admin.php?cat=3" <?php if($active==3) echo " class=active"; ?>>Utilisateurs</a></li>
                    	<li><a href="admin.php?cat=2" <?php if($active==2) echo " class=active"; ?>>Mod&eacute;rateurs</a></li>
                    	<li><a href="admin.php?cat=1" <?php if($active==1) echo " class=active"; ?>>Administrateurs</a></li>
                    	<li><a href="#">Mon Profil</a></li>                    	
                    </ul>
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->
                
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
	while ($row = $results->fetch_row()) {

		echo '<tr>' .
		'<td>';
		echo $row[1] . '</td>' . '<td class="action"><a href="#" class="view">Afficher</a>' .
		'<a href="#" class="edit">Editer</a>' .
		'<a href="javascript:supp(' . $row[0] . ');" class="delete">Supprimer</a>' .
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
        
        <p id="footer">Mon Blog &#169; 2010-2011</p>
    </div>
    <!-- // #wrapper -->
</body>
</html>
