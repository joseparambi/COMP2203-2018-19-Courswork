<?php

/**
 * This code shows the process genre view php file which has the files in order to call the reviews and be able to process them to enable them to view when the reviews are processed
 *
 * displays the lists of reviews which are available to use when calling the process reviews file which enables the reviews to be displayed as well as reviews to be submitted onto the db
 *
 * class genre view
 *
 * @author Jose Parambi
 */
 
 
 // loads the relevant required files

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
	
	// check that the ID exists and it is the correct type
	// implement parts from previous labs and adapted this in order to help me
	
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
			  <a href="film.php?id=<?=$film->id?>"><img src="http://comp2203.ecs.soton.ac.uk/coursework/1617/assets/posters/<?=$film->id?>_medium.jpg" height="300" width="200" alt="First slide"></a>
			  </div>
			<div class="col-md-8 ">
			<div class="row center"">
				<h5><b><u><?=$film->name?></u></b></h5>
			</div>
			<div class="row">
				<h5><?=$film->description?></h5>
			</div>
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