<?php session_start();
if(!(isset($_SESSION['status']) && $_SESSION['unm']=='admin'))
{
	header("index.php");
}

if(empty($_POST))
{
	exit;
}
$msg=array();

if(empty($_POST['cat_id']))
{
	$msg[]="One of the field is empty";
}

if(!empty($msg))
{
	echo "<b>Errors:</b><br>";
	foreach($msg as $k)
	{
		echo "<li>".$k;
	}
}
else
{
//$link=mysql_connect("localhost","jobscope","riddhi")or die("can not connect");
//mysql_select_db ("jobscope",$link) or die("can not select database");
/* $con=mysqli_connect("localhost","root","","eshop") or die("database failed");
$cat_id=$_POST['cat_id'];
$q="delete from category where cat_id='$cat_id'";
mysqli_query($con,$q) or die ("wrong query");
mysqli_close($con); */
$con=mysqli_connect('localhost','root','','eshop');
$did=$_GET['id'];
$sql="DELETE FROM category WHERE cat_id='$did'";
mysqli_query($con,$sql);
header("location:category_list.php");
}