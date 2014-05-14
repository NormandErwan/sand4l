<?php

function id_nouvel_article() { //Création d'un nouvel article, quel id donner ? Id du dernier article posté + 1
	
	$bdd = connexion();
	
	$requete = "SELECT `id` FROM `articles` ORDER BY `id` DESC LIMIT 0,1";
	
	$reponse = mysql_query($requete) or die('Échec de la requête : ' . mysql_error());
	
	$resultat = mysql_fetch_assoc($reponse);
	$id = $resultat['id']+1;
	
	return $id;
}

function poster_article($titre, $contenu, $id = null) {
	
	// Edition d'article si $id précisé
	if (empty($id))
		$id = (int) $id; 
		
	$bdd = connexion();
	
	$titre = mysql_real_escape_string($titre);
	$contenu = mysql_real_escape_string($contenu);
	$requete = "INSERT INTO `articles`(`id`, `titre`, `contenu`, `date`) VALUES ('','$titre','$contenu',CURDATE())";
	
	$resultat = mysql_query($requete) or die('Échec de la requête : ' . mysql_error());
	
	return $resultat;
}

function liste_totalite_articles() {
	
	$bdd = connexion();
	
	$requete = "SELECT `id`,`titre`,`date` FROM `articles` ORDER BY id DESC LIMIT 0,50";
	
	$reponse = mysql_query($requete) or die('Échec de la requête : ' . mysql_error());
	
	while($ligne = mysql_fetch_assoc($reponse))
		$resultat[] = $ligne;
	
	return $resultat;
}