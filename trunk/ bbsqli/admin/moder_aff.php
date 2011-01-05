<?php require_once 'moder_header.php'; ?>
<script type="text/javascript" src="style/js/lib.js"></script>
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
                <form action="" class="jNice">
					<h3>Affichage des informations</h3>
                    	
                              
<?php


//Affichage d'une publication
if ($_GET["t"] == 1) {
	$sql = 'SELECT IdBlog ,IdUtilisateur ,Titre ,Contenu ,Image ,DatePostee ,Approuve' .
	' FROM Blog WHERE IdBlog=' . $_GET["id"];

	$results = $conn->query($sql);

	if ($results->num_rows) {
		if ($row = $results->fetch_array()) {
			echo '<table cellpadding="0" cellspacing="0"><tr><td></td>' .
			'<td class="action">' .
			 ((is_null($row['Approuve']) || $row['Approuve'] == 0) ? '<a href="javascript:active_moder(' . $row['IdBlog'] . ' ,1);" class="view">Activer</a>' : '') .
			 ((is_null($row['Approuve']) || $row['Approuve'] == 1) ? '<a href="javascript:active_moder(' . $row['IdBlog'] . ' ,2);" class="delete">D&eacute;sactiver</a>' : '') .
			'</td></tr></table>';
			echo '<fieldset>' .
			'<p>Date Post&eacute;e : ' . $row['DatePostee'] . '</p>' .
			'<p style="font-style:italic; ' .
			 ((is_null($row['Approuve'])) ? 'color:#C5A059;">&Agrave; Mod&eacute;rer' : (($row['Approuve'] == 1) ? 'color:#55A34A;">Approuv&eacute;e' : 'color:#A02B2B;">D&eacute;sactiv&eacute;e')) . '</p>' .
			'<p>Titre de la publication : ' . $row['Titre'] . '</p>' .
			'<p><label>Contenu de la publication : </label><img src="../uploads/' . $row['Image'] . '" /></p>' .
			'<p>' . $row['Contenu'] . '</p>' .
			'</fieldset>';
		}
	} else {
		echo '<td>Il n&apos;y a pas de donn&eacute;es &agrave; afficher</td>';
	}
}
//Afichage d'un commentaire
elseif ($_GET["t"] == 2) {
	$sql = 'SELECT cb.IdCommentaireBlog ,cb.IdBlog ,cb.IdUtilisateur' .
	' ,cb.Contenu ,cb.DatePostee ,cb.Approuve ,b.Titre' .
	' FROM CommentaireBlog cb, Blog b WHERE cb.IdBlog=b.IdBlog AND cb.IdCommentaireBlog=' . $_GET["id"];

	$results = $conn->query($sql);

	if ($results->num_rows) {
		if ($row = $results->fetch_array()) {
			echo '<table cellpadding="0" cellspacing="0"><tr><td></td>' .
			'<td class="action">' .
			 ((is_null($row['Approuve']) || $row['Approuve'] == 0) ? '<a href="javascript:active_moder(' . $row['IdCommentaireBlog'] . ' ,3);" class="view">Activer</a>' : '') .
			 ((is_null($row['Approuve']) || $row['Approuve'] == 1) ? '<a href="javascript:active_moder(' . $row['IdCommentaireBlog'] . ' ,4);" class="delete">D&eacute;sactiver</a>' : '') .
			'</td></tr></table>';
			echo '<fieldset>' .
			'<p>Date Post&eacute;e : ' . $row['DatePostee'] . '</p>' .
			'<p style="font-style:italic; ' .
			 ((is_null($row['Approuve'])) ? 'color:#C5A059;">&Agrave; Mod&eacute;rer' : (($row['Approuve'] == 1) ? 'color:#55A34A;">Approuv&eacute;e' : 'color:#A02B2B;">D&eacute;sactiv&eacute;e')) . '</p>' .
			'<p>Titre de la publication : ' . $row['Titre'] . '</p>' .
			'<p>Contenu du commentaire : </p>' .
			'<p>' . $row['Contenu'] . '</p>' .
			'</fieldset>';
		}
	} else {
		echo '<td>Il n&apos;y a pas de donn&eacute;es &agrave; afficher</td>';
	}
}
?> 
</table>   	
                	
                	
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