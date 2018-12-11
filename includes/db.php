<?php

// database credentials
$dbHost		 = 'comp2203.ecs.soton.ac.uk';
$dbUsername	 = 'comp2203-cw-1819';
$dbPassword	 = '788FPR2R5HYm1b3Ur1737ZyfD';
$dbSchema	 = 'comp2203-cw-1819';

$db = new PDO("mysql:host=$dbHost;dbname=$dbSchema", $dbUsername, $dbPassword);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


