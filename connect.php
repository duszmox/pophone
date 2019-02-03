<?php 
	

	$host 		 = "c252um.forpsi.com";
	$username  = "b9087";
	$password  = "vE4mkcT";
	$database  = "b9087";
	$connected = false;

	$db_conn = mysqli_connect($host, $username, $password, $database) 
		or die("Failed to connect to MySQL: ".mysqli_connect_error());
		$connection = $db_conn;
		$db_conn;
	mysqli_set_charset($db_conn, 'utf8');

	if (!mysqli_connect_errno())
	{
		$connected = true;
	}
	
?>