<?php
	chdir(dirname(__DIR__));
	define('BASE_PATH', dirname(__DIR__));
	include BASE_PATH . '/backend/Framework/Core/Loader/SplClassLoader.php';
	include BASE_PATH . '/backend/Framework/Framework.php';
	
	$loader = new Framework\Core\Loader\SplClassLoader('Framework', 'backend');
	$loader->register();
	
	$framework = new Framework\Framework();
	$framework->run();
?>



