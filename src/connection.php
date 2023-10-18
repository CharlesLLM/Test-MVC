<?php

function connection()
{
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbName = 'test-mvc';

	try
	{
		$connection = new PDO("mysql:host=".$host.";dbname=".$dbName, $user, $password);
		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(Exception $e) {
		die($e->getMessage());
	}
    
	return $connection;
}	

function disconnection()
{
	$connection = null;
}
