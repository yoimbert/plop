<?php
function unzip_file($file, $destination) {
	// Créer l'objet (PHP 5 >= 5.2)
	$zip = new ZipArchive() ;
	// Ouvrir l'archive
	if ($zip->open($file) !== true) {
		return 'no';
	}
	// Extraire le contenu dans le dossier de destination
	$zip->extractTo($destination);
	// Fermer l'archive
	$zip->close();
	// Afficher un message de fin
	echo 'Archive extrait';
}

// Exemple d'utilisation
unzip_file('./web/ubiflow/ag170960.zip', './web/automation/XML_SRC/');
?>
