<?php
	$connect = new PDO("mysql:host=localhost;dbname=warzonedatabase", "root", "");

	if($_POST["query"] != '')
	{
		$search_array = explode(",", $_POST["query"]);
		$search_text = "'" . implode("', '", $search_array) . "'";
		$query = "
		SELECT * FROM weapons 
		WHERE weapontypenumber IN (".$search_text.") 
		ORDER BY weaponname 
		";
	}
	else
	{
		$query = "SELECT * FROM weapons ORDER BY weaponname DESC";
	}

	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';

	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$output .= '
			<tr>
				<td>'.$row["weaponname"].'</td>
				<td>'.$row["weapontypenumber"].'</td>
				<td>'.$row["weaponnumber"].'</td>
				<td>'.$row["accuracy"].'</td>
				<td>'.$row["damage"].'</td>
				<td>'.$row["range"].'</td>
				<td>'.$row["firerate"].'</td>
				<td>'.$row["mobility"].'</td>
				<td>'.$row["control"].'</td>
			</tr>
			';
		}
	}
	else
	{
		$output .= '<tr> <td colspan="5" align="center">No Data Found</td> </tr>';
	}
	echo $output;
?>