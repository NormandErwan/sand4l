<?php

// Désactivation des magic quotes ( free encore une fois en retard sur tout le monde )
function stripslashes_r($var) // Fonction qui supprime l'effet des magic quotes
{
        if(is_array($var)) // Si la variable passée en argument est un array, on appelle la fonction stripslashes_r dessus
        {
                return array_map('stripslashes_r', $var);
        }
        else // Sinon, un simple stripslashes suffit
        {
                return stripslashes($var);
        }
}

// Augmentation de scandir pour les besoins des articles : on veut avoir les images de l'article sans la principale de bandeau
function liste_images($dossier_images) // le dossier des images de l'article
{
	$dossier = opendir($dossier_images);
	
	$images = array();
	
	while (false !== ($image = readdir($dossier)) AND !in_array($image, array('0.jpg', '.', '..'))) { //toutes les images sans la principale de bandeau
		$images[] = $image;
	}
	
	return $images;
}