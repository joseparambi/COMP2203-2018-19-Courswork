<?php

/**
 * This code shows the db php file which contains the database needed in order to import the relevant information as well as export the reviews made
 *
 * Loads the relevant classes when the db.php is called upon
 *
 * The database defines the parameters in order to make have the information needed
 *
 * @author Jose Parambi
 *
 * @parameters dbHost , dbUsername , dbPassword , dbSchema
 *
 */


// database credentials in order to connect

$dbHost		 = 'comp2203.ecs.soton.ac.uk';
$dbUsername	 = 'comp2203-cw-1819';
$dbPassword	 = '788FPR2R5HYm1b3Ur1737ZyfD';
$dbSchema	 = 'comp2203-cw-1819';

$db = new PDO("mysql:host=$dbHost;dbname=$dbSchema", $dbUsername, $dbPassword);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


