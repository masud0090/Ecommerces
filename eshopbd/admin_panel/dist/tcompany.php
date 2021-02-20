<!DOCTYPE html>
<html lang="en">
<head>
  <title>Total Companys</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="container">
        <h2>Total Companys</h2>            
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th width="5%">No
                    <th width="20%">Company Name
                    <th width="15%">Company Phone								
                </tr>
            </thead>
            <tbody>
                <?php
                    $con=mysqli_connect("localhost","root","","jobscope") or die("could not connect to db");
                    $sql="SELECT er_company,er_ph FROM employers";
                    $result=mysqli_query($con,$sql) or die("query failed");
                    $count=1;
                    while($row=mysqli_fetch_array($result))
                    {
                        echo'<tr><td width="5%">'.$count.'';
                ?>		
                            <td width="20%"><?php echo $row['er_company']?></td>
                            <td width="15%"><?php echo $row['er_ph']?></td>
                                                
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
