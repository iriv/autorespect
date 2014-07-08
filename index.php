<?php
	require_once 'lib/Twig/Autoloader.php';
	Twig_Autoloader::register();

	$loader = new Twig_Loader_Filesystem('tpl');
	$twig = new Twig_Environment($loader, array(
	    'cache'       => 'cache',
	    'auto_reload' => true
	));

	if ($_GET["page"]){
		$page = $_GET["page"];
	}
	else{
		$page = "main_cr";
	}

	echo $twig->render($page . '.html',array('tplname' => $page));
?>