<?php 

	if(isset($_GET['module']) && ($_GET['module'] == 'films' || $_GET['module'] == 'film'))
		include('Pages/films.php');
	elseif(isset($_GET['module']) && ($_GET['module'] == 'actors' || $_GET['module'] == 'actor'))
		include('Pages/actors.php');
	elseif(isset($_GET['module']) && $_GET['module'] == 'search')
		include('Pages/search.php');
	elseif (isset($_GET['module']) && $_GET['module'] == '')
		include ('Pages/films.php');
	else
		include('Pages/404.php');



?>