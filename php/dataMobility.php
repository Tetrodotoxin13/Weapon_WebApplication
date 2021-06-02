<?php
	header('Content-Type: application/json');

	$conn = mysqli_connect("localhost","root","","warzonedatabase");

	$sqlQuery = "SELECT `weaponname`,`mobility` FROM `weapons` ORDER BY `weaponname`";

	$result = mysqli_query($conn,$sqlQuery);

	$data = array();
	foreach ($result as $row) {
		$data[] = $row;
	}

	mysqli_close($conn);

	echo json_encode($data);
?>