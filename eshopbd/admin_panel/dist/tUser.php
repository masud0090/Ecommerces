<!DOCTYPE html>
<html lang="en">
<head>
  <title>Total User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
	<h2>Total User</h2>
				
	<table class="table table-bordered">
		<thead>
			<tr>
				<th width="5%">No
				<th width="28%">Employees Name
				<th width="10%">Employees Gender
				<th width="28%">Employees Email
				<th width="28%">Employees Address
			</tr>
		</thead>
		<tbody>
			<?php
				$con=mysqli_connect("localhost","root","","jobscope") or die("could not connect to db");
				$sql="SELECT ee_fnm,ee_gender,ee_email,ee_add FROM employees";
				$result=mysqli_query($con,$sql) or die("query failed");
				$count=1;
				while($row=mysqli_fetch_array($result))
				{
					echo'<tr><td width="5%">'.$count.'';
			?>		
							<td width="28%"><?php echo $row['ee_fnm']?></td>
							<td width="10%"><?php echo $row['ee_gender']?></td>
							<td width="28%"><?php echo $row['ee_email']?></td>
							<td width="28%"><?php echo $row['ee_add']?></td>
						</tr>
			<?php
					$count++;
				}
			?>
		</tbody>
	</table>
	</div>

</body>
</html>
