<?php 
$page = $_SERVER['REQUEST_URI'] ; 
$active = 'class="active"' ;
?>

<div class="row">
	<div class="col-md-12">
		<ul class="nav nav-tabs">
			<li <?php if(stristr($page , 'index')) echo $active; ?>><a href="index.php">Home</a></li>
			<li <?php if(stristr($page , 'finances')) echo $active; ?>><a href="finances.php">Finances</a></li>
			<li <?php if(stristr($page , 'about')) echo $active; ?>><a href="about.php">About</a></li>
			<li <?php if(stristr($page , 'contact')) echo $active; ?>><a href="contact.php">Contact Us</a></li>
			<div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand" href="#">WebSiteName</a>
			</div>
			<ul class="nav navbar-nav">
			  <li class="active"><a href="#">Home</a></li>
			  <li><a href="#">Page 1</a></li>
			  <li><a href="#">Page 2</a></li>
			</ul>
			<form class="navbar-form navbar-left" action="/action_page.php">
			  <div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			  </div>
			  <button type="submit" class="btn btn-default">Submit</button>
			</form>
		  </div>
		</ul>
	</div>
</div>


