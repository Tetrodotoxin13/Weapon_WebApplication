<?php
	$connect = new PDO("mysql:host=localhost;dbname=warzonedatabase", "root", "");
	$query = "SELECT DISTINCT weapontypenumber FROM weapons ORDER BY weapontypenumber ASC";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Weapon Database in table</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />

		<script src="../js/jqueryyy.min.js" type="text/javascript"></script>
		<script src="..js/bootstrapp.min.js" type="text/javascript"></script>
		<link rel="stylesheet" href="../css/bootstrappp.min.css" type="text/css">
		<link rel="icon" href="../PicturesHome/logo.png" sizes="16x16 32x32" type="image/png">
		<script src="../js/bootstrap-select.min.js"></script>
	</head>
	<body style="background-image: url('../PicturesHome/blacktopo.jpg');">
		<div class="container">
			
			<br />
			<h2 align="center" style="color: white;">Weapon Database</h2>
			<hr color="white">
			
			<div style="color: white;background-image: url('../PicturesDatabase/darkone.jpg');">
				<hr>
				<div style="color: white;"> <strong>Weapon type numbers:</strong> </div>
				1 - Assault Rifles 
				<br>
				2 - Submachine Guns
				<br>
				3 - Shotguns
				<br>
				4 - Sniper Rifles
				<br>
				5 - Light Machine Guns
				<br>
				6 - Marksman Rifles
				<br>
				7 - Handguns
				<br>
				8 - Melee 
				<br>
				9 - Launchers
				<br>
				<hr color="white">
			</div>
			
			<select name="multi_search_filter" id="multi_search_filter" multiple class="form-control selectpicker">
				<?php
					foreach($result as $row)
					{
						echo '<option value="'.$row["weapontypenumber"].'">'.$row["weapontypenumber"].'</option>';	
					}
				?>
			</select>
			
			<input type="hidden" name="hiddentype" id="hiddentype" />
			
			<div style="clear:both"></div>
			<br />
			
			<div class="table-responsive" style="background-color: white;">
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Weapon name</th>
							<th>Weapon type number</th>
							<th>Weapon number</th>
							<th>Accuracy</th>
							<th>Damage</th>
							<th>Range</th>
							<th>Fire rate</th>
							<th>Mobility</th>
							<th>Control</th>
						</tr>
					</thead>
					
					<tbody>
					</tbody>
				
				</table>
			</div>
			
			<br />
			<br />
			<br />

		</div>
	</body>
</html>


<script>
	$(document).ready(function(){
		load_data();
		function load_data(query='')
		{
			$.ajax({
				url:"fetchWeapons.php",
				method:"POST",
				data:{query:query},
				success:function(data)
				{
					$('tbody').html(data);
				}
			})
		}
		$('#multi_search_filter').change(function(){
			$('#hiddentype').val($('#multi_search_filter').val());
			var query = $('#hiddentype').val();
			load_data(query);
		});
	});
</script>




