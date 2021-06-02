<?php
	$connect = new PDO("mysql:host=localhost;dbname=warzonedatabase", "root", "");
	$query = "SELECT DISTINCT attachmenttypenumber FROM attachments ORDER BY attachmenttypenumber ASC";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Attachment Database in table</title>
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
			<br/>
			<h2 align="center" style="color: white;">Attachment Database</h2>
			<hr color="white">

			<div style="color: white;background-image: url('../PicturesDatabase/darkone.jpg');">
				<hr>
				<div style="color: white;"> 
					<strong>Attachment type numbers:</strong>
				</div>
				1 - Muzzle
				<br>
				2 - Rear grip
				<br>
				3 - Stock
				<br>
				4 - Optic
				<br>
				5 - Laser
				<br>
				6 - Pump
				<br>
				7 - Magazine
				<br>
				8 -  Barrel
				<br>
				9 - Underbarrel
				<br>
				10 - Guard
				<br>
				11 - Trigger action
				<br>
				<hr color="white">
			</div>
				
			<select name="multi_search_filter" id="multi_search_filter" multiple class="form-control selectpicker">
				
				<?php
					foreach($result as $row)
					{
						echo '<option value="'.$row["attachmenttypenumber"].'">'.$row["attachmenttypenumber"].'</option>';	
					}
				?>
			</select>

			<input type="hidden" name="hiddentypeA" id="hiddentypeA" />
				
			<div style="clear:both"></div>
			<br />
			<div class="table-responsive" style="background-color: white;">
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Attachment name</th>
							<th>Attachment type number</th>
							<th>Attachment number</th>
							<th>Accuracy change</th>
							<th>Damage change</th>
							<th>Range change</th>
							<th>Fire rate change</th>
							<th>Mobility change</th>
							<th>Control change</th>
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
				url:"fetchAttachments.php",
				method:"POST",
				data:{query:query},
				success:function(data)
				{
					$('tbody').html(data);
				}
			})
		}

		$('#multi_search_filter').change(function(){
			$('#hiddentypeA').val($('#multi_search_filter').val());
			var query = $('#hiddentypeA').val();
			load_data(query);
		});
		
	});
</script>




