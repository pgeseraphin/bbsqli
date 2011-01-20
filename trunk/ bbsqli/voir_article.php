
<?php
/*
 * Created on 17 déc. 2010
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
session_start(); 
$id=$_SESSION['user_id'];
require_once 'param_connexion.php';
require_once 'header.php';
?>

</head>
	
<body>

<div id="wrapper">
    	<!-- h1 tag stays for the logo, you can use the a tag for linking the index page -->
    	<h1><a href= "index.php"><span>Voir mon article</span></a></h1>
        
        <!-- You can name the links with lowercase, they will be transformed to uppercase by CSS, we prefered to name them with uppercase to have the same effect with disabled stylesheet -->
        <?php 
        include("navigation.php");
        
              ?>
        <!-- // #end mainNav -->
        
        <div id="containerHolder">
			<div id="container">
        		<div id="sidebar">
                	<ul class="sideNav">
                	    <li><a href="inscription.php">S'inscrire</a></li>                	    
                    	<li><a href="creer_blog.php">Ajouter une publication</a></li>
                    	<li><a href="voir_article.php">voir publication</a></li>                    	
                    	<li><a href="#">Archives</a></li>
                    	<li><a href="user_profil.php">Mon profil</a></li>
                    	
                    </ul>
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->
                
                <!-- h2 stays for breadcrumbs -->
                <!--h2><a href="#">Dashboard</a> &raquo; <a href="#" class="active">Print resources</a></h2-->                               
               
                <div id="main">
                    
                <h3>Article</h3>           
<?php
session_start();
if($id==""){
	print("Vous devez vous connecter avant de voir un article");
	header('Location: connexion.php');
	
}
else
{
	

$sql = 'SELECT u.IdUtilisateur ,u.TitreBlog' .
' ,u.Prenom ,u.Nom, b.IdBlog ,b.Titre' .
' ,b.Contenu,b.DatePostee' .
' FROM Utilisateur u, Blog b WHERE u.IdUtilisateur=b.IdUtilisateur AND b.IdUtilisateur='. $_SESSION['user_id'];


$results = $conn->query($sql);

if ($results->num_rows) {
	while ($row = $results->fetch_array()) {
		session_start();
		$_SESSION['idblog']=$row['IdBlog'];
		
		echo 
           '<table cellpadding="0" cellspacing="0"> 
			<tr><td></td><td class="action"><a href="" class="edit">Editer</a>
		
		
		<form action="commentaire_post.php" method="post">
		<tr><td>Titre du Blog : ' . '</td>' . '<td>' . $row['TitreBlog'] . '</td></tr>
		<tr><td>Pr&eacute;nom : ' . '</td>' . '<td>' . $row['Prenom'] . '</td></tr>
		<tr><td>Nom : ' . '</td>' . '<td>' . $row['Nom'] . '</td></tr>
		<tr><td>Titre de l\'article : ' . '</td>' . '<td>' . $row['Titre'] . '</td></tr>
		<input type="hidden" name="idblog" id="titre" value="' . $row['IdBlog'] . '" />
		<tr><td>Article: ' . '</td>' . '<td></td></tr>		
		
		<td valign="top" colspan="2"><div id="zonetexte"><textarea cols=92" rows="8" disabled>' . $row['Contenu'] . '</textarea></div></td>
		<tr><td>Date post&eacute;e: ' . '</td>' . '<td>' . $row['DatePostee'] . '</td></tr>
	
			
		<tr><td>Commenter: ' . '</td>' . '<td></td></tr>
		<tr><td valign="top" colspan="2"><div id="zonetexte"><textarea cols=30" rows="8" type="text" name="conte" onClick="blank()" class="contenu"></textarea></div></td></tr>
		<tr><td align="left" style="font-size: 13px;"><input type="submit" name="valider" id ="valider" value="poster commentaire"></td><td align="right" style="font-size: 13px;"><a href="voir_commentaire.php?blog='.$row['IdBlog'].'" class="comment">Voir commentaire</a></td></tr> 
		</form>
		</table><br/><br/>';
	}
	
} 
}
?> 
 
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
		
 <?php
?>
		
		
		
	</body>
</html>