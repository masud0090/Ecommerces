<!DOCTYPE html>
<html lang="en">
<head>
  <title>deadlinecheck</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
        $con=mysqli_connect("localhost","root","","jobscope") or die("could not connect to db");
        $sql="SELECT * FROM jobs";
        $result=mysqli_query($con,$sql) or die("query failed");
        if(mysqli_num_rows($result)>0)
        {
    ?>

            <div class="container">
            <h2 class="title"><center><font color ="red" >Deadline Check</center></font></h2>
            <p class="meta"></p>            
            <table class="table table-bordered">
                <thead>
                    <th>Company name</th>
                    <th>Job title</th>
                    <th>Deadline</th>
                    <th>Check</th>
                </thead>
                <tbody>
                    <?php
                        while($data=mysqli_fetch_assoc($result))
                        {
                    ?>
                            <tr>
                                <td><?php echo $data['company_name']?></td>
                                    <td><?php echo $data['j_title']?></td>
                                    <td><?php echo $data['deadline']?></td>
                                    <td><a href="deadlinechecktemp.php?id=<?php echo $data['j_id'];?>">check</a></td>
                                </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
    <?php     
        }
    ?>
    </div>

</body>
</html>
