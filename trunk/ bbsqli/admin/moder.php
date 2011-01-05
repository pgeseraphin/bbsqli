<?php require_once 'moder_header.php'; ?>
<script type="text/javascript" src="style/js/lib.js"></script>
</head>

<body>
	<div id="wrapper">
    	<!-- h1 tag stays for the logo, you can use the a tag for linking the index page -->
    	<h1><a href="#"><span>Mon Blog</span></a></h1>
        
         <?php require_once '../navigation.php'; ?>
        
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
			echo $row['Titre'] . '</td>' . '<td class="action"><a href="moder_aff.php?t=1&id='.$row['IdBlog'].'" class="edit">Afficher</a>' .
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
			echo $row['Titre'] . '</td>' . '<td class="action"><a href="moder_aff.php?t=2&id='.$row['IdCommentaireBlog'].'" class="edit">Afficher</a>' .
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
