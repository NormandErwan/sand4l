<?php

function connexion() {
	
	//Connexion free.fr
	$connexion = @mysql_connect('sql.free.fr', 'sand4l', 'euRT790K');
	
	//Connexion locale
	if(!$connexion)
		$connexion = mysql_connect('localhost', 'root', '');
	
	if(!$connexion)
		die('Impossible de se connecter : ' . mysql_error());
		
		
	$bdd = mysql_select_db('sand4l', $connexion);
	if (!$bdd) 
	   die ('Impossible de sélectionner la base de données : ' . mysql_error());
	   
	
	//Les données récupérées et affichées sont en utf8 ( et mysql_ commence vraiment à dater s'il faut spécifier des trucs pareils --' )
	mysql_query("SET NAMES 'utf8'");
	mysql_query("SET CHARACTER SET utf8");
	mysql_query("SET COLLATION_CONNECTION = 'utf8_unicode_ci'");
		
}
