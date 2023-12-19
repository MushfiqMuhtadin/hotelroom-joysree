<?php

	$dbuser = 'root';
	$dbpass = '';
	$host 	= 'localhost';
	$dbname	= 'hotel';

	$conn = mysqli_connect('localhost','root','','hotel') or die('connection failed');

	function getConnection()
	{

		global $dbname, $dbpass, $dbuser, $host;
		$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
		return $conn;

	}

?>