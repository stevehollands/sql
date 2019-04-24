<?php
try
{
	// We connect to MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=weatherapp;charset=utf8', 'root', 'SteHol44%'); 
	//echo 'connected';

}
catch(Exception $e)
{
	// In case of error, we display a message and stop everything
	die('Error: '. $e->getMessage());
}