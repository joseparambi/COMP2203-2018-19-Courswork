<?php

/**
 * This code shows the film php file which has the function called films which can be called upon in order to intialise a function
 *
 * displays the lists of films in the db when calling upon the id in reference to the function
 *
 * class films
 *
 * @author Jose Parambi
 */


require_once('includes/header.php');
// gets the database connection
require('includes/db.php');
// gets the genre class
require('classes/genre.class.php');
require('classes/film.class.php');
require('classes/review.class.php');


?>

<div class="text">Films</div>
		
		<div class = "text">
		<div  class = "col-md-1"></div>

<div id="content" class="row">

  	
	<?php
	
	try{
		// check that the ID exists and it is the correct type
		// implement parts from previous labs and adapted this in order to help me
		if(!isset($_GET['id']) OR empty($_GET['id']) OR !is_numeric($_GET['id'])) throw new Exception('The ID must be specified. Please go back and try again.');
		
		// searches variable film within the db and select the film from id
		$film = $db->prepare('SELECT * FROM film WHERE id = ?');
		$film->execute([$_GET['id']]);
		$films=$film->fetchObject('film');
		
		// searches variable review within the db and select the film from film id	
		$reviews = $db->prepare('SELECT * FROM review WHERE film_id = ? LIMIT 10');
		$reviews->execute([$films->id]);
		
		?>
		
		<div class="col-md-12">
		
			<div class="row">
			<div class="row">
				<div class="col-md-12">
					<dt>Film Name:</dt>
						<dd><?=$films->name?></dd>
				</div>
				<div class="col-md-4">
					<img src="http://comp2203.ecs.soton.ac.uk/coursework/1617/assets/posters/<?=$films->id?>_medium.jpg" height:"200" width="200" alt="First slide">
				</div>
				<div class="col-md-8">
					<h3>Description:</h3>
						<h5><?=$films->description?></h5>
				</div>
			</div>
			</div>
			<div class="col-md-4">
					<h5>Runtime:</h5>
						<h5><?=$films->runtime?> Minutes</h5>
			</div>
			<div class="col-md-4">
					<h5>Director:</h5>
						<h5><?=$films->director?></h5>
			</div>
			<div class="col-md-4">		
					<h5>Classification:</h5>
						<h5><?=$films->classification?></h5>
			</div>			
			<div class="col-md-4">		
					<h5>IMBD Rating:</h5>
						<h5><?=$films->imdb_id?></h5>
			</div>	
				
				
				<h3>Current Reviews</h3>
				<p class="text-muted">Only the 10 most recent reviews</p>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Comment No:</th>
							<th>Film ID:</th>
							<th>Reviewer Name:</th>
							<th>Comment:</th>
							<th>Liked:</th>
						</tr>
					</thead>
					<tbody>
						<?php while($review=$reviews->fetchObject('review')): ?>
							<tr>
								<td><?=$review->id?></td>
								<td><?=$review->film_id?></td>
								<td><?=$review->reviewer?></td>
								<td><?=$review->comment?></td>
								<td><?=$review->liked?></td>
									<?php if($review->liked)
									{
									?>
									<img src="img/thumbsup.gif"/>
									
									<?php } ?>
									
									<?php if(!$review->liked)
									{
									?>
									<img src="img/thumbsdown.gif" />
									
									<?php } ?>
							</tr>
						<?php endwhile; ?>
					</tbody>
		
					
				</table>
			</div>
		
		</div>
		
		<br>
		
		<div class="col-md-12">
			<h3>Submit a Review!</h3>
			<form role="form" action="process-reviews.php" method="post" class="col-md-12">
				<div class="form-group">
					<label for="ReviewerName">Name:</label>
					<input name="reviewer" type="text" class="form-control" id="bidderName" placeholder="Your name">
				</div>
		
				<div class="col-md-12">
					<label for="ReviewValue">Comment:</label>
					<div class="input-group">
						<span class="input-group-addon"></span>
						<input name="comment" type="text" class="form-control" id="ReviewValue" placeholder="Review Comment">
					</div>
				</div>
				<br>
				
				<div class="col-md-12">
				<label for="ReviewValue">How much did you like the movie? </label><br>
				<input type="radio" name="liked" value=1 checked> Very Much!<br>
				<input type="radio" name="liked" value=0> Not at all! 
				</div>
				
				<br>
				
				<input name="film_id" type="hidden" id="review_id" value="<?=$_GET['id']?>">
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
						
						
						
						
		
			</div>
		
			
	<?php
	}
	catch(Exception $e){
		echo '<div class="alert alert-danger">';
		echo 	'<strong>Error!</strong>';
		echo 	'<p>'.$e->getMessage().'</p>';
		echo '</div>';
	}
	
	?>
	
</div><!-- /main content -->

<?php require_once('includes/footer.php'); ?>