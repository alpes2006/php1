<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
//	header('Location: '.$uri.'/Curso FOAP - 2019/');
    header('Location: '.$uri.'C:\Users\foap\Desktop\Repositorio1\php1-1');
	exit;
?>
Something is wrong with the XAMPP installation :-(
