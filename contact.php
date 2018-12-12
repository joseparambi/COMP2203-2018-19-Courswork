<?php 

/**
 * This code shows the contact php file which has the files in order to call the contact us page
 *
 * displays the lists of contacts which are available to use when calling upon the contact php file
 *
 * class contact
 *
 * @author Jose Parambi
 */


 
require_once('includes/predispatch.php');
require_once('includes/header.php');
require_once('includes/head.php');
require('includes/db.php');
require('classes/genre.class.php');


// searches variable movies within the db and select the film by theatricalRelease and by Random sort and limits these to 5 and 1 respectively
$movies = $db->prepare("SELECT * FROM film ORDER BY theatricalRelease DESC LIMIT 5");
$random = $db->prepare("SELECT * FROM film ORDER BY RAND() DESC LIMIT 1");
$random -> execute();
$movies->execute();

?>

<body onLoad="startTimer()">

<div class="text">Contact Us</div>
		
		<div class = "text">
		<div  class = "col-md-1"></div>
		

	<h3> Red Carpet Films &copy; </h3>
	<h5> Location: Cambridge , UK </h5>
	<h5> Email: redcarpetfilms@gmail.com</h5>
	<h5> Contact Number: 0800898989</h5>
	<h5> Find us on Instagram , LinkdedIn , Twitter , Facebook @redcarpetfilms </h5>
	

		
	<div class="mapouter"><div class="gmap_canvas"><iframe width="1020" height="1080" id="gmap_canvas" 
	src="https://maps.google.com/maps?q=cambridge%20science%20park&t=k&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" 
	marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de/webdesign-bremen/"></a></div><
	style>.mapouter{text-align:right;height:1080px;width:1020px;}.gmap_canvas {overflow:hidden;background:none!important;height:1080px;width:1020px;}</style></div>
	</div>


	
	</body>
