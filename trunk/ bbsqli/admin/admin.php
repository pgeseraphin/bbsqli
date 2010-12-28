<?php
require_once 'db.php';
require_once 'lib.php';

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

<!-- JavaScripts-->
<script type="text/javascript" src="style/js/jquery.js"></script>
<script type="text/javascript" src="style/js/jNice.js"></script>
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
					<h3> <?php if(isset($titre)) echo 'Liste des '. $titre; ?></h3>
                    	<table cellpadding="0" cellspacing="0">
<?php

$sql = 'SELECT IdUtilisateur, Login, Email' .
' FROM Utilisateur WHERE Type=' . $_GET["cat"];

$results = $conn->query($sql);

if ($results->num_rows) {
	while ($row = $results->fetch_row()) {

		echo '<tr>' .
		'<td>';
		echo $row[1] . '</td>' . '<td class="action"><a href="#" class="view">View</a><a href="#" class="edit">Edit</a><a href="#" class="delete">Delete</a></td>' .
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
					<h4><?php if($_GET['ok']==1) echo ' Le compte a &eacute;t&eacute; cr&eacute;&eacute;'; ?></h4>
					<form action="admin_creer.php" method="post" class="jNice">
					
                    	<fieldset>
                    		<p><label>Type :</label>
                            <select name="type">
                            	<option value="2">Mod&eacute;rateur</option>
                            	<option value="1">Administrateur</option>
                            	 </select>
                            </p>
                        	<p><label>Identifiant* :</label><input type="text" name="login" class="text-long" /></p>
                        	<p><label>Mot de passe* :</label><input type="password" name="password" class="text-long" /></p>
                            <p><label>Email* :</label><input type="text" name="email" class="text-long" />
                            <input type="hidden" name="curPageURL" value="<?php echo curPageURL(); ?>" class="text-long" />
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
