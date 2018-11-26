<!DOCTYPE html>
<html>
	<?php include("header.php"); ?>
	<body onLoad="startTimer()">
		
		<!-- container -->
		<div class="container">
			
			
			<!-- header -->
			<header>
				<!-- title -->
				<div class="top">
				<div class="row">
					<div class="col-md-3 pull-left"><img src="img/1_massive.jpg"></div>
					<div class="col-md-6"><h1>Red Carpet Films</h1></div>
					<div class="col-md-3 pull-right"><img src="img/1_massive.jpg"></div>
					
					<br></br>
					<h2 id="motd">Selection of Movies to Entertain you for a lifetime!</h2>
					
				</div>
				</div>
				
				
				
			<?php include("navigation.php"); ?>
				
			</header><!-- /header -->
			
			
			<!-- main content -->
			<main class="carousel">
			<div class="row">
				
				
				 <div id="myCarousel" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner">
					<div class="item active">
					  <img src="img/1_medium.jpg" height = "50px" alt="Los Angeles">
					</div>

					<div class="item">
					  <img src="img/1_medium.jpg" alt="Chicago">
					</div>

					<div class="item">
					  <img src="img/1_medium.jpg" alt="New York">
					</div>
				  </div>

				  <!-- Left and right controls -->
				  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#myCarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				  </a>
				</div>
				</div>
			</main><!-- /main content -->
			<?php include("footer.php"); ?>
			
			
		</div><!-- /container -->
		<!-- jQuery first, then Tether, then Bootstrap JS. -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
		<script src="js/script.js" type="text/javascript"></script>
	</body>
</html>
