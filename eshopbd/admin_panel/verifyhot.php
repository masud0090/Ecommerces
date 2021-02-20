<?php 
	//$link=mysql_connect("localhost","jobscope","riddhi")or die("can not connect");
	//mysql_select_db("jobscope",$link) or die("can not select database");
	$con=mysqli_connect("localhost","root","","jobscope") or die("database failed");
	$q="select * from hotjobs where j_active=0";
	$res=mysqli_query($con,$q);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Flowerily 
Description: A two-column, fixed-width design for 1024x768 screen resolutions.
Version    : 1.0
Released   : 20090906

-->
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
<title>Verify (HOT JOBS)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<?php
//include("includes/head.inc.php");
?>
</head>
<body>
	<?php
                        session_start();
						if($_SESSION['admin']==""){
							header("location:dist/login.php");
						}
    ?>

<div id="header-wrapper">
	<div id="header">
	<div id="menu">
		<?php
	//	include("includes/menu.inc.php");
		?>
		</div>
		<!-- end #menu -->
		<div id="search">
		<?php
		
		//include("includes/search.inc.php");
		?>
		</div>
		<!-- end #search -->
	</div>
</div>
<!-- end #header -->
<!-- end #header-wrapper -->
<div id="logo">
	<?php
	//include("includes/logo.inc.php");
	?>
	</div>
<div id="wrapper">
	<div id="page">
		<div id="page-bgtop">
			<hr />
			<!--hot jobs j-active=0 is displayed here-->

			<div id="content">
				<div class="post">
					
				<div class="container">
  					<h2><center><font color ="red" >Verify (HOT JOBS)</center></font></h2>
					<p class="meta"></p>           
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>No</th>
								<th>Job Title</th>
								<th>Company</th>
								<th>Accept</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$count=1;
								while($row=mysqli_fetch_array($res))
								{
									echo '<tr>
											<td> '.$row['id'].'</td>
											<td> '.$row['j_title'].'</td>
											<td>'.$row['com_name'].'</td>
											<td><a href="process_verify_hot.php?id='.$row['id'].'">Accept</a></td>
										</tr>';
									$count++;
								}
												
							?>
						</tbody>
					</table>
			</div>

					</div>
				</div>
				
			</div>

			<!--hot jobs end up here-->
			<!-- end #content -->
			<div id="sidebar">
			
			<!-- end #sidebar -->
			<div style="clear: both;">&nbsp;</div>
		</div>
	</div>
</div>
<!-- end #page -->

</body>
</html>
