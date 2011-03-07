<?php


/*
 * Created on 17 déc. 2010
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

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
			   <div id="sidebar">  
        		    <ul class="sideNav"> 
        		     
        		    </ul>              	
                    <!-- // .sideNav -->
                </div>  
                <!-- // #sidebar -->         
              
                
                <div id="main">
                <h3>Test sur les headers</h3>
                    <div class="faille_exploit">
                    <p>$userid = isset ($_GET['id']) ? $_GET['id'] : 0;	</p><br/>
                    <p>$sql = "SELECT Login, Prenom, Nom, Email FROM Utilisateur WHERE IdUtilisateur = $userid";</p><br/>
	                <p>$search_result = $conn->query($sql);</p>              
                  
                  </div>
                    
                    <form action="" method="post">							 
                    </form>    
					 
					<table cellpadding="0" cellspacing="0">
					<?php
function get_real_ip(){
  return isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR']: $_SERVER['REMOTE_ADDR'];
}
$_SERVER['MOI'] = 'Mamadou';
$adr = $_SERVER['HTTP_X_FORWARDED_FOR'];
$ip = get_real_ip();
foreach($_SERVER as  $key => $value){
	echo '<tr><td>' . $value . '</td>' . '<td>' . $key . '</td></tr>';
}
echo '<tr><td> <h3> Fin headers </h3></td></tr>';
$userid = isset ($_GET['id']) ? $_GET['id'] : 0;
$sql = "SELECT Login, Prenom, Nom, Email FROM Utilisateur WHERE IdUtilisateur = $userid";
$search_result = $conn->query($sql);
if ($search_result->num_rows) {
	echo "<h3>Biuenvenue  $ip : $adr</h3>";
	while ($row = $search_result->fetch_row()) {

		echo '<tr><td>Nom : ' . '</td>' . '<td>' . $row[0] . '</td></tr>';
		echo '<tr><td>Prénom : ' . '</td>' . '<td>' . $row[1] . '</td></tr>';
		echo '<tr><td>Login : ' . '</td>' . '<td>' . $row[2] . '</td></tr>';
		echo '<tr><td>Email : ' . '</td>' . '<td>' . $row[3] . '</td></tr>';
	}

} else
	echo '<h3>Auccun utilisateur trouvé</h3>';

$search_result->close();
?>  
</table>      
        	               
                       
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