<?php
require_once('includes/predispatch.php');
require('includes/db.php');
require_once('classes/actor.class.php');
require_once('classes/film.class.php');
require_once('classes/genre.class.php');
require_once('classes/review.class.php');
require_once('classes/role.class.php');
require_once('includes/header.php');

	if(!isset($_POST['film_id']) OR empty($_POST['film_id']) OR !is_numeric($_POST['film_id'])) throw new Exception('1');
	//if(!isset($_POST['liked']) OR empty($_POST['liked']) OR !is_numeric($_POST['liked'])) throw new Exception('2');
	if(!isset($_POST['reviewer']) OR empty($_POST['reviewer']) ) throw new Exception('3');

	$film_id = $_POST['film_id'];
	$liked = $_POST['liked'];
	$reviewer = $_POST['reviewer'];
	$comment = $_POST['comment'];

	// otherwise inset the review record
	$review = $db->prepare("INSERT INTO review(film_id , reviewer , comment , liked ) VALUES (?, ?, ?, ?)");
	$review->execute([$film_id , $reviewer , $comment , $liked]);
	
	
	header("Location: http://linuxproj.ecs.soton.ac.uk/~jp13g17/coursework-1819-joseparambi-master/COMP2203-2018-19-Courswork/film.php?id=".$_POST['film_id']);
	
?>

