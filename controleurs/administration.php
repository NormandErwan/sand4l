<?php

	include_once 'modeles/article.php';
	
	/* Validation du formulaire de connexion */
	if (!empty($_SESSION['connecte']) OR (!empty($_POST) AND $_POST['utilisateur'] == 'sand4l' AND $_POST['mot_de_passe'] == '2014L T.'))
		$_SESSION['connecte'] = 1;
		
	/* Deconnexion */
	if (!empty($_SESSION['connecte']) AND !empty($_GET['action']) AND $_GET['action'] == 'deconnexion') {
		$_SESSION['connecte'] = 0;
		header("Location: administration.php");
	}
	
	
	/* Si admin connecté */
	if (!empty($_SESSION['connecte'])) {
		
		$h1 = 'Administration';
		
		/* Gestion des articles et des partenaires */
		if(!empty($_GET['action'])) {
			/* 
				Ajout d'un article 
			*/
			if($_GET['action'] == 'ajouter_article') {
				
				$h1 .= ' > Ajout d\'un article';
				$id = id_nouvel_article();
				$dossier_images = '_/images/articles/'.$id.'/';
				$date = date('Y-m-d');
				$pre_contenu = "<h2></h2>\n\n<p>\n\n</p>\n\n<p>\n</p>\n\n\n<h2></h2>\n\n<p>\n</p>\n\n<p>\n</p>";
				
				//Création du dossier pour les images
				if(empty($_POST['etape_images']))
					@mkdir($dossier_images, 0711);
				
				
				//Contenu et titre écrits
				if(!empty($_POST['titre']) AND !empty($_POST['contenu'])) {
					
					//L'article est posté
					if (!empty($_POST['action_validation']) AND $_POST['action_validation'] == 'poster') {
						if(poster_article($_POST['titre'], $_POST['contenu']))
							header("Location: ?action=succes");
						
						
					//Préparation de l'apercu avec $article pour la vue ./vues/pages/article.php
					} else {
						$h1 = '';
						$article = array(	'id' => $id,
											'lien' => '',
											'titre' => $_POST['titre'],
											'date' => $date,
											'dossier_images' => $dossier_images,
											'images' => liste_images($dossier_images),
											'timestamp' => strtotime($date),
											'contenu' => $_POST['contenu']);
					}
				}
			}
		/* FIN Gestion des articles */
		
		/* Liste des articles et partenaires */
		} else
			$articles = liste_totalite_articles();
		
	}
