<?php
	
	/* Définition de la page a charger */
	if(!isset($page) || !is_file('vues/pages/' . $page . '.php')) //Si pas de page, on veut le blog. Et test si la page existe sinon les articles
		$page = 'article';
	
	
	/* Configuration (session, connexion) */
	require_once 'controleurs/configuration.php';
	
	
	/* On charge les modèles nécessaires */
	require_once 'modeles/partenaires.php';
	if($page == 'article' OR $page == 'plan_site')
		require_once 'modeles/article.php';
	if($page == 'administration')
		require_once 'modeles/administration.php';
	
	
	/* On charge le controleur */
	if(is_file('controleurs/' . $page . '.php'))
		require_once 'controleurs/' . $page . '.php';
		
		
	/* Le titre de la page web ( dans l'onglet du navigateur ) */
	$titre = array(	'4l_trophy' => 'Le raid 4L Trophy',
				'administration' => 'Administration',
				'article' => '', //Dépends de l'article, stocké dans la base
				'documents' => 'Documents',
				'contact' => 'Contactez-nous',
				'sand4l' => 'Qui sommes nous ?',
				'partenaires' => 'Les partenaires');
	if(!empty($article))
		$titre['article'] = $article['titre'];
		
	/* Le bandeau */
	if($page == 'article') {
		$bandeau = '_/images/articles/'.$id.'/0.jpg';
	} else if (is_file('_/images/pages/'.$page.'.jpg')) {
		$bandeau = '_/images/pages/'.$page.'.jpg';
	} else
		$bandeau = '_/images/pages/documents.jpg'; //L'image par défault
		
	
	/* On charge le controleur de la barre latérale <aside> (la vue est chargée dans vues/vue_principale.php ci dessous) */
	include_once 'controleurs/lateral.php';
	
	
	/* On charge la vue */
	include_once 'vues/vue_principale.php';
	
