<?php
	
	function attribution_droits($dossier) {
		
		if(is_dir($dossier)) {
			
			$liste = scandir($dossier);
		
		}
	}
		
	echo 'Droits sur les dossiers et fichiers: 100 pour les dossiers 500 pour les fichiers<br>';
	
	$dossier = '../';