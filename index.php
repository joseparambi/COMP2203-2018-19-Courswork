<?php 

/**
 * This code shows the genre class php file which has the function called films which can be called upon in order to intialise a function
 *
 * displays the films db when calling upon the id in reference to the function
 *
 * 
 * class genre
 *
 * @author Jose Parambi
 */

 
require_once('includes/predispatch.php');
require_once('includes/header.php');
require_once('includes/head.php');
require('includes/db.php');
require('classes/genre.class.php');


$movies = $db->prepare("SELECT * FROM film ORDER BY theatricalRelease DESC LIMIT 5");
$random = $db->prepare("SELECT * FROM film ORDER BY RAND() DESC LIMIT 1");
$random -> execute();
$movies->execute();


?>

<body onLoad="startTimer()">


<div class="text">Welcome to Red Carpet Films!</div>
		
		<div class = "text">
		<div  class = "col-md-1"></div>
		
	<h2>Firstly a brief introduction about us:</h2>
	<h5>Welcome to Red Carpet Films , A site which provides Quality Entertainment for those who seek Quality Movies , Browse all the latest releases which are fully exclusive in high quality definition within our website! </h5>
		
		 <h2>Here are the top 5 trending Films:</h2>
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
		  </ol>

		
		  <div class="carousel-inner">
			<?php $movie=$movies->fetchObject("film");?>
			<div class="carousel-item active">
			  <img src="http://comp2203.ecs.soton.ac.uk/coursework/1617/assets/posters/<?=$movie->id?>_medium.jpg" alt="First slide">
			  <div id ="First"><h3>Film Name: <?=$movie->name?> </h3> </div>
			  
			  <div><h5> Film Description: <?=$movie->description?> </h5> </div>
			  <div><h5> Film Director: <?=$movie->director?> </h5> </div>
			  <div><h5> Film Runtime: <?=$movie->runtime?> Minutes </h5>  </div>
			 
			 	  
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>

			 
			  
			</div>
			<?php $movie=$movies->fetchObject("film");?>
			<div class="carousel-item">
			  <img src="http://comp2203.ecs.soton.ac.uk/coursework/1617/assets/posters/<?=$movie->id?>_medium.jpg"  alt="Second slide">
			  
			   <div id ="Second"><h3>Film Name: <?=$movie->name?> </h3> </div>
			  <div><h5>Film Description: <?=$movie->description?> </h5> </div>
			  <div><h5> Film Director: <?=$movie->director?> </h5> </div>
			  <div><h5> Film Runtime: <?=$movie->runtime?> Minutes </h5> </div>
	
				  
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>

	
	
			</div>
			
	
			<?php $movie=$movies->fetchObject("film");?>
			<div class="carousel-item">
			  <img src="http://comp2203.ecs.soton.ac.uk/coursework/1617/assets/posters/<?=$movie->id?>_medium.jpg" alt="Third slide">
			  
			  <div id ="Third"><h3> Film Name: <?=$movie->name?> </h3> </div>
			  <div><h5>Film Description: <?=$movie->description?> </h5> </div>
			  <div><h5> Film Director: <?=$movie->director?> </h5> </div>
			  <div><h5> Film Runtime: <?=$movie->runtime?> Minutes </h5> </div>
			  
			  	  
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>

			  
			  
			  
			</div>
			
		
			  
			<?php $movie=$movies->fetchObject("film");?>
			<div class="carousel-item">
			  <img src="http://comp2203.ecs.soton.ac.uk/coursework/1617/assets/posters/<?=$movie->id?>_medium.jpg"  alt="Fourth slide">
			  
			  
			   <div id ="Fourth"><h3> Film Name: <?=$movie->name?> </h3> </div>
			  <div><h5> Film Description: <?=$movie->description?> </h5> </div>
			  <div><h5> Film Director: <?=$movie->director?> </h5> </div>
			  <div><h5> Film Runtime: <?=$movie->runtime?> Minutes </h5>  </div>
			 
			 	  
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>

			 
			 
			  
			</div>
			
			
			
			<?php $movie=$movies->fetchObject("film");?>
			<div class="carousel-item">
			  <img src="http://comp2203.ecs.soton.ac.uk/coursework/1617/assets/posters/<?=$movie->id?>_medium.jpg"  alt="Fifth slide">
		
			   <div id ="Fifth"><h3>Film Name:<?=$movie->name?> </h3> </div>
			  <div><h5>Film Description:<?=$movie->description?> </h5> </div>
			  <div><h5> Film Director: <?=$movie->director?> </h5> </div>
			  <div><h5> Film Runtime: <?=$movie->runtime?> Minutes </h5> </div>
			 
			 	  
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>

			 
			 
			 <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
			 
			  
			</div>

		  </div>

		  
		</div>
		</div>
		
		<div class = "text">

		
		<h2>Random Film Generator:</h2>
	
		<?php $movie=$random->fetchObject("film");?>
			<div class="col-md-12">
			  <img src="http://comp2203.ecs.soton.ac.uk/coursework/1617/assets/posters/<?=$movie->id?>_medium.jpg"  alt="Random slide">
			  
			  <div id ="Random">Film Name: <h3> <?=$movie->name?> </h3> </div>
			  <div><h5> Film Description: <?=$movie->description?> </h5> </div>
			  <div><h5> Film Director: <?=$movie->director?> </h5> </div>
			  <div><h5> Film Runtime: <?=$movie->runtime?> Minutes </h5> </div>
			  
			  
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star "></span>

			  
			</div>
	
		<!-- jQuery first, then Tether, then Bootstrap JS. -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
		<script src="js/script.js" type="text/javascript"></script>
		
		
	</body>



<?php require_once('includes/footer.php'); ?>