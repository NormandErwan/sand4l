<?php

//Récupère toutes les photos des pages de 4ltrophy.com
	
	//Le dossier d'enregistrement
	$dossier = './photos_4ltrophy';
	if(!is_dir($dossier)) {
		if(!mkdir($dossier))
			exit("Erreur lors de la création du dossier");
	}
	

	//Liste des pages
	$pages = array('actualite', 'le-deroulement-du-raid', 'participer-en-2014', 'presentation', 'lorganisation', 'vu-par-les-equipages', 'deloitte-4l-ecochallenge', 'operation-desert-propre', 'enfants-du-desert-maroc', '4l-solidaire-france', 'rire-medecin', 'medias', 'photos', 'videos', 'partenaires-de-ledition-2013', 'devenir-partenaire');
	$liens_photos = array();
	
	//Charge chaque page et récupération des liens des photos
	foreach($pages as $page) {
		
		$contenu = file_get_contents('http://www.4ltrophy.com/cat/'.$page.'/?gotosite=1');
		
		if(!empty($contenu)) {
			//Cherche les liens de toutes les photos
			preg_match_all('#http://site4l\.desertours\.netdna-cdn\.com/wp-content/uploads/(?:201[0-9]{1}/[0-9]{2}/)?([a-zA-Z0-9_+-]+)\.jpg#U', $contenu, $resultat);
			$liens_photos = array_merge($liens_photos, $resultat[0]);
		}
	}
	
	//Enlève les facteurs de réduction, pour avoir les photos en taille maximale
	natsort($liens_photos);
	$liens_photos = array_unique($liens_photos);
	$liens_photos = preg_replace('#-[0-9]{2,4}x[0-9]{2,4}x(?:c|n)#', '', $liens_photos);
	
	
	//Téléchargement des photos
	foreach($liens_photos as $lien_photo) {
	
		set_time_limit(30); //Pour laisser le temps au script de télécharger la photo

		preg_match('#/[a-zA-Z0-9_+-]+\.jpg#', $lien_photo, $nom_photo);
		$nom_photo = $nom_photo[0];

		
		if(strpos($nom_photo, '150x150') === false) { //On ne télécharge pas les icones 150x150
		
			echo $dossier.$nom_photo.'<br>';
			
			if(!is_file($dossier.$nom_photo[0])) { //Si la photo n'a pas déjà été téléchargée
			
				$telechargement = fopen($lien_photo, "r");
				$fichier_photo = '';
				
				if($telechargement) { //si le lien est correct, la photo a pu être ouverte
				
					while(!feof($telechargement)) { //Téléchargement
						$fichier_photo .= fread($telechargement, 8192);
					}
					fclose($telechargement);
				
					$enregistrement = fopen($dossier.$nom_photo, "w"); //enregistrement
					fwrite($enregistrement, $fichier_photo);
					
					fclose($enregistrement);
				}
				
			}
		}
	}
	