<?php

function connect(&$con){

	$con = mysqli_connect("192.168.1.20:3306", "athang213", "One1Two2Three3", "DB1");

	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

}

function disconnect(&$con){

	mysqli_close($con);

}

?>
