<?php require_once 'moder_header.php'; ?>
<style type="text/css">
label.error { float: none; color: red; padding-left: .5em; vertical-align: top; }
</style>
<script type="text/javascript" src="style/js/jquery.validate.js"></script>
<script type="text/javascript" src="style/js/messages_fr.js"></script>
<script language="javascript" type="text/javascript">
function active_moder(id,categ)
 {
 	switch(categ){
	 	case 1:
		     if (confirm('Voulez-vous vraiment activer cette publication ?')) {
		         window.location.href = 'moder_active.php?t=1&c=1&id=' + id;
		     }
		     break;
		 case 2:
		     if (confirm('Voulez-vous vraiment d&eacute;sactiver cette publication ?')) {
		         window.location.href = 'moder_active.php?t=1&c=0&id=' + id;
		     }
		     break;
		 case 3:
		     if (confirm('Voulez-vous vraiment activer ce commentaire ?')) {
		         window.location.href = 'moder_active.php?t=2&c=1&id=' + id;
		     }
		     break;
		 case 4:
		     if (confirm('Voulez-vous vraiment d&eacute;sactiver ce commentaire ?')) {
		         window.location.href = 'moder_active.php?t=2&c=0&id=' + id;
		     }
		     break;    		         
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
				<?php require_once 'moder_side.php'; ?>
						
        		
                
                <!-- h2 stays for breadcrumbs -->
                <h2><a href="#">Mod&eacute;ration</a> &raquo; <a href="#" class="active"><?php echo $titre; ?></a></h2>
                
                <div id="main">
                	<form action="" class="jNice">
					<h3> <?php  if(isset($titre)) echo 'Liste des '. $titre; ?></h3>
					<h4><?php


session_start();
if ($_SESSION['curPageName'] == 'moder_active.php' && $_GET['mod'] == 1) {
	echo '<span style="color : #009900;">L&apos;action a &eacute;t&eacute; compl&eacute;t&eacute;e</span>';
	$_SESSION['curPageName'] = curPageName();
}
?></h4>
                    	<table cellpadding="0" cellspacing="0">
<?php
//Moderation des publications
if($_GET["cat"]==1||$_GET["cat"]==2||$_GET["cat"]==3){	
	$sql = 'SELECT IdBlog ,IdUtilisateur ,Titre' .
	' FROM Blog WHERE Approuve '. $appr;
	
	$results = $conn->query($sql);
	
	if ($results->num_rows) {
		while ($row = $results->fetch_array()) {
	
			echo '<tr>' .
			'<td>';
			echo $row['Titre'] . '</td>' . '<td class="action"><a href="moder_aff.php?c=1&id='.$row['IdBlog'].'" class="edit">Afficher</a>' .
			'<a href="javascript:active_moder(' . $row['IdBlog'] . ' ,1);" class="view">Activer</a>' .
			'<a href="javascript:active_moder(' . $row['IdBlog'] . ' ,2);" class="delete">D&eacute;sactiver</a>' .
			'</td>' .
			'</tr>';
		}
	} else {
		if (isset ($titre))
			echo '<td>Il n&apos;y a pas de donn&eacute;es &agrave; afficher</td>';
	}
}
//Moderation des commentaires
elseif($_GET["cat"]==4||$_GET["cat"]==5||$_GET["cat"]==6){	
	$sql = 'SELECT cb.IdCommentaireBlog ,cb.IdBlog ,cb.IdUtilisateur ,b.Titre' .
	' FROM CommentaireBlog cb, Blog b WHERE cb.IdBlog=b.IdBlog AND cb.Approuve '. $appr;
	
	$results = $conn->query($sql);
	
	if ($results->num_rows) {
		while ($row = $results->fetch_array()) {
	
			echo '<tr>' .
			'<td>';
			echo $row['Titre'] . '</td>' . '<td class="action"><a href="moder_aff.php?c=1&id='.$row['IdCommentaireBlog'].'" class="edit">Afficher</a>' .
			'<a href="javascript:active_moder(' . $row['IdBlog'] . ' ,3);" class="view">Activer</a>' .
			'<a href="javascript:active_moder(' . $row['IdBlog'] . ' ,4);" class="delete">D&eacute;sactiver</a>' .
			'</td>' .
			'</tr>';
		}
	} else {
		if (isset ($titre))
			echo '<td>Il n&apos;y a pas de donn&eacute;es &agrave; afficher</td>';
	}
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
