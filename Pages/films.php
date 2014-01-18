<?php if(isset($_GET['id'])) : ?>
	<?php 
		$film = array();
		$actors = array();
		
		$query = 'SELECT * FROM `t_films` WHERE id=' . sprintf('%d', $_GET['id']);
		$result = mysql_query($query);
		$row = mysql_fetch_assoc($result);
	
		if($row){
			$film = $row;
			$query = 'SELECT * FROM t_actorFilms 
					  LEFT JOIN t_actors 
							ON t_actorFilms.actorID = t_actors.id
					  WHERE t_actorFilms.filmID =' . $row['id'];
			
			$result = mysql_query($query);
			while($row = mysql_fetch_assoc($result)){
				$actors[] = $row;
			}
	?>
	
	<form action="/template/training/mysql/search/">
		<input type="text" name="key" placeholder="search" />
		<input type="submit" value="search" />
	</form>
	
	<?php foreach($actors as $value) : ?>
		<a href="/actor/<?= $value['id'] ?>"><?= $value['name'] ?></a><br/>
	<?php endforeach; ?>
			
	<!-- HTML -->
	
	
	
	<?php 		
		}
		else{
			include '404.php';
			exit;
		}
	?>	
	
	
	
	
	
	
	
	
	
	
	
<?php else : ?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

<?php endif; ?>