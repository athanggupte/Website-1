<?php

	include 'dbconnect.php';

	connect($con);

	$sql = "SELECT * FROM Student";

	$result = mysqli_query($con, $sql);

	while ($row = mysqli_fetch_assoc($result))
	{
		$array[] = $row;
	}

	header('Content-Type:Application/json');

	echo json_encode($array);

	disconnect($con);

?>
