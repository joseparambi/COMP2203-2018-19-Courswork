<?php

require_once('includes/header.php');
// gets the database connection
require('includes/db.php');
// gets the genre class
require('classes/genre.class.php');


// gets the lists of genres available

$genres = $db->prepare("SELECT * FROM genre");
$movies = $db->prepare("SELECT * FROM film");
$genres->execute();
$movies->execute();

	
?>
<div class="text">Genres</div>
		
		<div class = "text">
		<div  class = "col-md-1"></div>

		
<div id="content" class="row">
	<div class="col-md-12 text-center">
		<div id="genre-list">
		
		<div class="list-group">
			
			
			<?php while($genre = $genres->fetchObject("Genre")): ?>
				<a href="genre-view.php?id=<?=$genre->id?>" class="list-group-item list-group-item-action">
					<h3 class="list-group-item-heading">Genre Name: <?=$genre->name?></h3>
				</a>
				
			<?php endwhile; ?>
			
		</div>
	</div>
</div>

</div>

</div>


<?php require_once('includes/footer.php'); ?>