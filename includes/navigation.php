<?php

/**
 * This code shows the navigation php file which has the navigation parameters defined in order to call the relevant variables in order to load the navigation bar
 *
 * loads the relevant files when the navigation file is called upon
 *
 * Array of pages.
 *
 * This builds the navigation list
 *
 * format: filename => URL name
 *
 * @author Jose Parambi
 */
 
	$pages = array(
		
		'genre'  => 'Genre',
		
		'contact'  => 'Contact US'

	);
	
$page = $_SERVER['REQUEST_URI'] ;
$active = 'class="active"' ;

?>

<div class="row">
	<div class="col-md-12">
		<ul class="nav nav-pills mb-4 mt-4">
		
		<div class="navbar">
		<div class="navbar-header">
						<a class="navbar-brand" href="index.php">Red Carpet Films</a>
					</div>
					
			
			<?php // Iterate through each page in the array above - also use the array key as $url ?>
			<?php foreach($pages as $url => $title) : ?>
				<?php
					// See if the string exists in the server script name.
					// This is the name and path from the root URL of the file.
					// If the current page is the item in the loop, add class="active".
					if(strstr($_SERVER['SCRIPT_NAME'], $url)) {
					  $active = ' active';
					} else {
						$active = '';
					}
				
					// Create the list item adding in the class="active" if needed, the href and link name.
				?>
			
				<li class="nav-item"><a href="<?=$url; ?>.php" class="nav-link<?=$active?>"><?=$title?></a></li
				
				

	
			<?php endforeach; ?>
			
			
			</div>
				</div>
			
		</ul>
	</div>

</div>

			