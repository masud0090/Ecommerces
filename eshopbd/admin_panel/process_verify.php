<?php
	if(empty($_GET))
	{
		header("location:index.php");
	}
	
		//$link=mysql_connect("localhost","jobscope","riddhi")or die("can not connect");
		//mysql_select_db("jobscope",$link) or die("can not select database");
		$con=mysqli_connect("localhost","root","","jobscope") or die("database failed");
		$q="update jobs
			set j_active=1
			where j_id=".$_GET['id'];
		
		mysqli_query($con,$q);
		
		header("location:verify.php");	
?>