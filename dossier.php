<?php

	$file = '_/documents/Dossier de Partenariat SAND 4L.pdf';
	$filename = 'Dossier de Partenariat SAND 4L.pdf'; /* Note: Always use .pdf at the end. */

	header('Content-type: application/pdf');
	header('Content-Disposition: inline; filename="' . $filename . '"');
	header('Content-Transfer-Encoding: binary');
	header('Content-Length: ' . filesize($file));
	header('Accept-Ranges: bytes');

	@readfile($file);