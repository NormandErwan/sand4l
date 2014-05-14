<?php

/*
Articles
*/

function liste_articles($page = null) {
	
	if(!empty($page)) { //Sélection des articles à afficher de la page
		$articles_pages = 8;
		$debut = (int) ($page-1) * $articles_pages;
		$fin = $debut + $articles_pages;
	}
		
	$bdd = connexion();
	
	$requete = "SELECT `id`,`titre`,`contenu`,`date` FROM `articles` ORDER BY id DESC";
	if(!empty($page)) $requete .= " LIMIT $debut,$fin"; 
	
	$reponse = mysql_query($requete) or die('Échec de la requête : ' . mysql_error());
	
	while($ligne = mysql_fetch_assoc($reponse))
		$resultat[] = $ligne;
	
	return $resultat;
}

function lire_article($id = '', $date = '', $titre = '') {
	
	$bdd = connexion();
	
	if(!empty($id)) {
	
		$id = (int) $id;
		
		$requete = "SELECT `id`,`titre`,`contenu`,`date` FROM articles WHERE id = $id";
		
	} elseif(!empty($date) AND !empty($titre)) {
	
		$date = mysql_real_escape_string($date);
		$titre = mysql_real_escape_string($titre);
	
		$requete = "SELECT `id`,`titre`,`contenu`,`date` FROM articles WHERE date = '$date'";
		
		
	} else
		exit('Echec de la requête');
	
	$reponse = mysql_query($requete) or die('Échec de la requête : ' . mysql_error());
	
	return mysql_fetch_assoc($reponse);
}