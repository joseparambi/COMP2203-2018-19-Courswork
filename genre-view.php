<?php

require_once('includes/header.php');
// gets the database connection
require('includes/db.php');
// gets the genre class
require('classes/genre.class.php');
require('classes/film.class.php');

?>


<div id="content" class="row">

<?php


try{
	
	if(!isset($_GET['id']) OR empty ($_GET['id']) OR !is_numeric($_GET['id'])) throw new Exception('The genre id must be listed');
	
			$genres = $db->prepare('SELECT * FROM genre WHERE id= ?');
			$genres->execute([$_GET['id']]);
			$genre=$genres->fetchObject('genre');
			
			$films = $genre->films();
	
	?>
	
	<h2>See all the Films for <?=$genre->name?></h2>
	<div id="film-list">
	<?php while($film = $films->fetchObject("film")):?>
	<div class="row text-center">
			  <div class="col-md-4">
			  <a href="film.php?id=<?=$film->id?>"><img src="http://comp2203.ecs.soton.ac.uk/coursework/1617/assets/posters/<?=$film->id?>_medium.jpg" height:"200" width="200" alt="First slide"></a>
			  </div>
			<div class="col-md-8">
				<h5><?=$film->description?></h5>
			</div>
	</div>
	</br>		
	
	<?php endwhile; ?>
	
	<?php
	}
	catch(Exception $e){
		echo '<div class="alert alert-danger">';
		echo 	'<strong>Error!</strong>';
		echo 	'<p>'.$e->getMessage().'</p>';
		echo '</div>';
	}
	
	?>
		


<?php require_once('includes/footer.php'); ?>