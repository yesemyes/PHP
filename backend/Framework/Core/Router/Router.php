<?php 

	$url = $_SERVER['REQUEST_URI'];

	$urlParams = explode('/', $url);
	array_shift($urlParams);
	array_shift($urlParams);
	array_shift($urlParams);
	
	foreach($urlParams as $key => $value){
		if($key == 0)
			$_GET['module'] = $value;
		elseif($key == 1)
			$_GET['id'] = $value;
		else 
			$_GET[$key] = $value;
	}
?>