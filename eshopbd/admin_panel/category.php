<?php session_start();

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

<?php
//include("includes/head.inc.php");
?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">




			<?php
                //session_start();
				if($_SESSION['admin']==""){
					header("location:dist/login.php");
				}
    		?>


<div id="header-wrapper">
	<div id="header">
	<div id="menu">
		<?php
		//include("includes/menu.inc.php");
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
			<div id="content">
				<div class="post">
					<h2 class="title" style="margin-left: 35%; margin-top: 8%"><font color ="red" >Add category</font></h2>
					<p class="meta"></p>
					<div class="entry">
					<form action="process_addcategories.php" method="POST" class="navbar-form navbar-left" style="margin-left: 35%">
					Name <input type = "text" name="category" class="form-control"> <input type="submit"  class="btn btn-success" value="Ok">
						</form>


						
					</div>
				</div><br><br><br>
				<!-- <h2 class="title">Delete category</h2>
					<p class="meta"></p>
					<div class="entry">
					<form action="process_deletecategories.php" method="POST">
						Name
						<html>
					<select name="name" style="width:150px;"> -->
					
					<h2 class="title" style="margin-left: 35%"><font color ="red" >Delete category</font></h2>
					<p class="meta"></p>
					<div class="entry">
					<form action="process_deletecategories.php" method="POST" class="navbar-form navbar-left" style="margin-left: 35%">
						Name 
						<html>
					<select name="name"  class="form-control" >
						<?php

						//$link=mysql_connect("localhost","jobscope","riddhi") or die("cant connect");
			
						//mysql_select_db("jobscope",$link) or die("cant select db");
						
						$con=mysqli_connect("localhost","root","","jobscope") or die("database failed");
						$q="select * from categories";
	
						$res=mysqli_query($con,$q) or die('wrong query');
	
						while($row=mysqli_fetch_assoc($res))
						{
							echo "<option>".$row['cat_nm'];
						}
						?>
					</select>
				</html>			<input type="submit"  class="btn btn-danger" value="Ok">
							<!-- <input type="submit" value="ok"> -->
					</form>
					</div>
				</div>
			</div>
			<!-- end #content -->
			
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
<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>
</html>
