<?php
    echo $index=$_GET['id'];
    $con=mysqli_connect("localhost","root","","jobscope") or die("could not connect to db");
    $sql="UPDATE jobs SET j_active='0' WHERE j_id='{$index}'";
    $result=mysqli_query($con,$sql) or die("query failed");
    

?>