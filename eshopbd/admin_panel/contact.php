

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php
//include("includes/head.inc.php");
?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
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
			<!-- end #logo -->
		<div class="post" style="margin-left: 100px; margin-right: 100px">
			<!-- <h1 class="title">Recent Contact</h1> -->
			<h1 class="title" style="margin-left: 40%;"><font color ="red" ><b>Contact Us</b></font></h1>
			<p class="byline"><small></small></p>
			
			<div class="entry">
			<br>
			<table border="1" width="100%" class="table table-bordered">
		
			<tr>
			<td width="25%"><b>NAME</b>
			<td width="65%"><b>QUERY</b>
			<td width="10%"><b>DELETE</b>
			</tr>
			
			
			
			<?php
			//$link = mysql_connect("localhost","jobscope","riddhi") or die("Cannot Connect");
			//mysql_select_db("jobscope",$link) or die("Cant select db");
			$con=mysqli_connect("localhost","root","","jobscope") or die("database failed");
			$q="select * from contact";
			$res=mysqli_query($con,$q)or die("can not connect");
			
			while($row=mysqli_fetch_assoc($res))
			{
				echo'
						<tr>
						<td>
						'.$row['cont_fnm'].'<br><small>'.$row['cont_email'].'</small><br><br>
						<td>'.$row['cont_query'].'
						<td><a href="process_delete.php?cat='.$row['cont_fnm'].'"><button type="button" class="btn btn-danger">Delete</button></a>
						</tr>
			
				';
			}
			?>
			<!-- <td><a href="process_delete.php?cat='.$row['cont_fnm'].'"><img src = "delete.png"></a> -->
			</table>
			
			</div>
			<p class="meta"></p>
		</div>
		
	</div>
	<!-- end content -->
	
<!-- end #sidebar -->
			<div style="clear: both;">&nbsp;</div>
		</div>
	</div>
</div>
<!-- end #page -->
<div id="footer-bgcontent">
	<div id="footer">
		<?php
		//include("includes/footer.inc.php");
		?>	
	</div>
</div>
<!-- end #footer -->

<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>
</html>
