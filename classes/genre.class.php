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


class genre {
	
	public $id;
	public $name;
	
	
	public function films(){
		
		include("includes/db.php");
	    $films = $db->prepare('SELECT * FROM film WHERE genre_id= ?');
		$films->execute([$this->id]);
		return $films;
		
	}

}

?>

