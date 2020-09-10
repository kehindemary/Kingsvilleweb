<?php

function connect()
{
	require 'dbConfig.php';
	try
	{
	$conn = new PDO($dsn,$username,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
	//   if ($conn):
	//  	echo "connection successful";
	//   endif;
	
	}
	
	catch(PDOException $e)
	{
		echo "Connection failed : ". $e->getMessage();
	}
	
	return $conn;
}
