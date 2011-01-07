<?php
/*
 * Created on Dec 15, 2010
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

require_once 'header.php';
?>

	    <script type="text/javascript" src="lib/template/style/js/jquery.validate.js"></script>
	    <script type="text/javascript" src="lib/template/style/js/messages_fr.js"></script>
	    <style type="text/css">
        label.error { float: none; color: red; padding-left: .5em; vertical-align: top; }
        </style>
	    <script>
 $(document).ready(function() {	 	 
 	 	
	$("#signupform").validate({
		rules: {
			nom:{
				required: true
			},
			prenom:{
				required: true
			},
			login: {
				required: true,
				minlength: 2,
				remote: "verif_login.php"
			},	
			mot_de_passe: {
				required: true,
				minlength: 4
			},
			confirmation_mdp: {
				required: true,
				minlength: 4,
				equalTo: "#mot_de_passe"
			},
			titre_blog: {
				required: true
			},
			email: {
				required: true,
				email: true,
				remote: "verif_email.php"
			},			
	    	messages: {
		    	nom: "Entrer votre nom",
		    	prenom: "entrer votre prenom",
		    	login: {
					required: "Entrer votre pseudo",
					minlength: "Veuillez entrer au moins 2 caractères.",
					remote: "Cet Identifiant existe d&eacute;j&agrave;."					
				},
		    	mot_de_passe: {
					required: "Veuillez entrer un Mot de passe.",
					minlength: "Veuillez entrer au moins 6 caractères."
				},
				confirmation_mdp: {
					required: "Veuillez entrer un Confirmation de mot de passe",
					minlength: "Veuillez entrer au moins 6 caractères.",
					equalTo: "Le Mot de passe et la Confirmation doivent correspondre."
				},
		    	email: "Veuillez entrer une adresse email valide."				
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
       <?php
	       	include("navigation.php");
       ?>
        <!-- // #end mainNav -->
        
        <div id="containerHolder">
			<div id="container">
        		<?php
        		require_once 'menu.php';
        		?>
                <!-- // #sidebar -->
                
                <!-- h2 stays for breadcrumbs -->                
                
                <div id="main">
                <form action="inscription_post.php" id="signupform" methode="post" class="jNice">
                	<h3>Renseigner les champs obligatoires</h3>
                    	<fieldset>
                        	<p><label>Nom*:</label><input type="text" name="nom" class="text-long" /></p>
                        	<p><label>Prénom*:</label><input type="text" name="prenom" class="text-long" /></p>
                        	<p><label>Login*:</label><input type="text" name="login" class="text-long" /></p>
                        	<p><label>Mot de passe*:</label><input type="password" name="mot_de_passe" id="mot_de_passe" class="text-long" /></p>
                        	<p><label>confirmez le mot de passe*:</label><input type="password" name="confirmation_mdp" id="confirmation_mdp" class="text-long" /></p>
                        	<p><label>Titre de votre blog*:</label><input type="text" name="titre_blog" class="text-long" /></p>
                        	<p><label>Email*:</label><input type="text" name="email" class="text-long" /></p>
                        	<p><label>Téléphone mobile:</label><input type="text" name="mobile" class="text-long" /></p>
                        	<p><label>Téléphone fixe:</label><input type="text" name="tel_fixe" class="text-long" /></p>
                        	<p><label>Fax:</label><input type="text" name="fax" class="text-long" /></p>
                        	<p><label>Date de naissance:</label><input type="text" name="dete_de_naissance" class="text-long" /></p>
                        	<p><label>Adresse:</label><input type="text" name="adresse" class="text-long" /></p>
                        	<p><label>Code postal, ville et Pays:</label>
                        	<input type="text" name="code_postal" class="text-small" /><input type="text" name="ville" class="text-small" /><input type="text" name="pays" class="text-medium" /></p>
                            <p><label>Sexe:</label>
                            <select>
                                <option>Faire un choix</option>
                            	<option>Masculin</option>
                            	<option>Feminin</option>                            	
                            </select>
                            </p>                            
                        	<p><label>A propos de vous:</label><textarea name="description" rows="1" cols="1"></textarea></p>
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
        
        <?php require_once 'footer.php'; ?>
    </div>
    <!-- // #wrapper -->

 	
</body>
</html>
