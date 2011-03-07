<?php


/*
 * Created on 17 déc. 2010
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 * test
 *Wisner cazeau
 */
session_start();
require_once 'param_connexion.php';
require_once 'header.php';
?>

</head>
	
<body>

<div id="wrapper">
    	<!-- h1 tag stays for the logo, you can use the a tag for linking the index page -->
    	<h1><a href= "index.php"><span>SQLi Test Platform</span></a></h1>
        
        <!-- You can name the links with lowercase, they will be transformed to uppercase by CSS, we prefered to name them with uppercase to have the same effect with disabled stylesheet -->
        <?php


include ("navigation.php");
?>
        <!-- // #end mainNav -->
        
        <div id="containerHolder">
			<div id="container">
			    <?php
        		require_once 'menu.php';
        		?>
                <!-- // #sidebar -->
                
                <!-- h2 stays for breadcrumbs -->
                <!--h2><a href="#">Dashboard</a> &raquo; <a href="#" class="active">Print resources</a></h2-->                               
                
                <div id="main">
                
                    <form action="">					
					<fieldset>
					        <p>Entrer le titre du blog</p>
                        	<p><input type="text" name="mot_cle" class="text-long" />                       	
                        	<input type="submit" value="Rechercher" /></p> 
                    </fieldset>   
                    </form>    
					 
					<table cellpadding="0" cellspacing="0">
					<?php


if (isset ($_REQUEST['mot_cle'])) {
	
	$mot = $_REQUEST['mot_cle'];
	if (empty ($_REQUEST['mot_cle']))
		echo '<h3>Veuillez entrer un mot clé</h3>';
	else {
		
		$sql = "SELECT TitreBlog, DateCreationCompte FROM Utilisateur WHERE TitreBlog LIKE '%$mot%' ORDER BY TitreBlog ASC LIMIT 0, 10";
		$search_result = $conn->query($sql);
		if ($search_result->num_rows) {
			echo "<h3>Résultat de votre recherche</h3>";
			echo '<tr><td><strong>Titre du blog</strong></td><td class="action"><strong>Dernière date de mise à jour</strong></td></tr>';
			while ($search_row = $search_result->fetch_row()) {
				
				echo '<tr>' .
				'<td>';
				echo '<a href="#">' . $search_row[0] . '</a>' . '</td>' . '<td class="action">' . $search_row[1] .
				'</td>' .
				'</tr>';
			}
		} else
			echo '<h3>Auccun résultat ne correspond à votre recherche</h3>';
		
		$search_result->close();
	}
	
}
?>  
</table>
           
                	<form action="" class="jNice">
					<h3>Les derniers blogs</h3>
                    	<table cellpadding="0" cellspacing="0">
                    	<?php


$reponse = $conn->query('SELECT TitreBlog, DateCreationCompte FROM Utilisateur ORDER BY DateCreationCompte DESC LIMIT 0, 10');
if ($reponse->num_rows) {
	echo '<tr><td><strong>Titre du blog</strong></td><td class="action"><strong>Dernière date de mise à jour</strong></td></tr>';
	while ($row = $reponse->fetch_row()) {
		
		echo '<tr>' .
		'<td>';
		echo '<a href="#">' . $row[0] . '</a>' . '</td>' . '<td class="action">' . $row[1] .
		'</td>' .
		'</tr>';
	}
}
$reponse->close();
?>
					                       
                        </table>
					
                    </form>
                </div>
                <!-- // #main -->
                
                <div class="clear"></div>
            </div>
            <!-- // #container -->
        </div>	
        <!-- // #containerHolder -->
        
       <?php require_once 'footer.php'; ?>
    </div>
    <!-- // #wrapper -->			
		
	</body>
</html>