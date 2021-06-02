<?php
	$connect = new PDO("mysql:host=localhost;dbname=warzonedatabase", "root", "");

	if($_POST["query"] != '')
	{
		$search_array = explode(",", $_POST["query"]);
		$search_text = "'" . implode("', '", $search_array) . "'";
		$query = "
		SELECT * FROM attachments 
		WHERE attachmenttypenumber IN (".$search_text.") 
		ORDER BY attachmentname 
		";
	}
	else
	{
		$query = "SELECT * FROM attachments ORDER BY attachmentname DESC";
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
				<td>'.$row["attachmentname"].'</td>
				<td>'.$row["attachmenttypenumber"].'</td>
				<td>'.$row["attachmentnumber"].'</td>
				<td>'.$row["accuracychange"].'</td>
				<td>'.$row["damagechange"].'</td>
				<td>'.$row["rangechange"].'</td>
				<td>'.$row["fireratechange"].'</td>
				<td>'.$row["mobilitychange"].'</td>
				<td>'.$row["controlchange"].'</td>
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