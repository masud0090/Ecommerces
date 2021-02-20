<?php session_start();
if(!(isset($_SESSION['status']) && $_SESSION['unm']=='admin'))
{
	header("location:../index.php");
}
//$link=mysql_connect("localhost","jobscope","riddhi")or die("can not connect");
//mysql_select_db ("jobscope",$link) or die("can not select database");
$con=mysqli_connect("localhost","root","","jobscope") or die("database failed");
$q="delete from contact where cont_fnm='".$_GET['cat']."'";
mysqli_query($con,$q) or die ("wrong query");
mysqli_close($con);
header("location:contact.php");
?>