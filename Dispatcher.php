<?php 

	if(isset($_GET['module']) && ($_GET['module'] == 'films' || $_GET['module'] == 'film'))
		include('pages/films.php');
	elseif(isset($_GET['module']) && ($_GET['module'] == 'actors' || $_GET['module'] == 'actor'))
		include('pages/actors.php');
	elseif(isset($_GET['module']) && $_GET['module'] == 'search')
		include('pages/search.php');
	elseif (isset($_GET['module']) && $_GET['module'] == '')
		include ('pages/films.php');
	else
		include('pages/404.php');



?>