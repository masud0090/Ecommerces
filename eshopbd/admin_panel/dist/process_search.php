<?php
    echo $title= $_POST['job-name'];
    echo $cat=$_POST['catselect'];
    $con=mysqli_connect("localhost","root","","jobscop") or die("could not connect to db");
    $sql="SELECT * FROM jobs WHERE j_title='{$title}' AND j_category ='{$cat}'";
    $result=mysqli_query($con,$ql) or die("query failed");
    if(mysqli_num_rows($result)>0){
        echo "yes";
    }
    else{
        echo "no";
    }
?>