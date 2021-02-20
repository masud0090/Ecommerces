<?php

$con = mysqli_connect('localhost', 'root', '', 'eshop');
$id = $_GET['id'];
$sql = "select product.product_id, product.p_name, product.price, product.product_limit, product.image, 
product.product_details, sub_category.sub_cat_id, sub_category.s_name, type.type_id, type.t_name, unit.unit_id,
unit.u_name FROM product, sub_category, type, unit where product.sub_cat_id=sub_category.sub_cat_id and 
product.type_id=type.type_id and product.unit_id=unit.unit_id and product_id='$id'";
$res = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($res);
if (isset($_POST['update'])) {

  $name = $_POST['name'];
  $price = $_POST['price'];
  $limit = $_POST['limit'];
  $subcategory = $_POST['subcategory'];
  $type = $_POST['type'];
  $unit = $_POST['unit'];
  $image = $_FILES['image']['name'];
  $temp = $_FILES['image']['tmp_name'];
  move_uploaded_file($temp, "uploads/$image");
  $details = $_POST['details'];
  if ($image) {
    $sqlupdate = "Update product SET p_name='$name', price='$price', product_limit='$limit', sub_cat_id='$subcategory',
     type_id='$type', unit_id='$unit', image='$image', product_details='$details' WHERE product_id='$id'";
    $res = mysqli_query($con, $sqlupdate);
    $myText = "Information Updated Successfully!";

    if ($res) {
      echo 'Information Successfully updated';
      header("location:product_list.php?id='$myText'");
    } else {
      echo 'Information not updated';
    }
  } else {
    $sqlupdate = "Update product SET p_name='$name', price='$price', product_limit='$limit', sub_cat_id='$subcategory',
  type_id='$type', unit_id='$unit', product_details='$details' WHERE product_id='$id'";
    $res = mysqli_query($con, $sqlupdate);
    $myText = "Information Updated Successfully!";

    if ($res) {
      echo 'Information Successfully updated';
      header("location:product_list.php?id='$myText'");
    } else {
      echo 'Information not updated';
    }
  }
}

?>

<html>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="designpage.css">
</head>

<body>


  <form action="" method="post" enctype="multipart/form-data" style="background-color: rgb(80, 181, 240); padding: 50px; margin:300px; margin-top: 100px; ">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h4 style="text-align: center;">Edit Products</h4>
        <hr>

        <div class="form-group">
          <label for="name"><span style=" margin-left: 140px;"></span><b> Product Name:</b></label>
          <input type="text" name="name" value="<?php echo $row["p_name"] ?>">
        </div>
        <div class="form-group">
          <label for="price"><span style=" margin-left: 140px;"></span><b> Product Price:</b></label>
          <input type="text" name="price" value="<?php echo $row["price"] ?>">
        </div>
        <div class="form-group">
          <label for="limit"><span style=" margin-left: 140px;"></span><b> Product Limit:</b></label>
          <input type="text" name="limit" value="<?php echo $row["product_limit"] ?>">
        </div>
        <div class="form-group">
          <?php
          $uname2 = $row['sub_cat_id'];
          $q = "SELECT * FROM sub_category where sub_cat_id!=$uname2";
          $res1 = mysqli_query($con, $q) or die("wrong query");
          if (mysqli_num_rows($res1) > 0) {
          ?>

            <label for="subcategory"><span style=" margin-left: 140px;"></span> <b>Choose Subcategory:</b></label>
            <select name="subcategory" id="subcategory">
              <option value="0">Select Subcategory</option>

              <option value="<?php echo $row['sub_cat_id'] ?>" selected><?php echo $row['s_name'] ?></option>
              <?php
              while ($row2 = mysqli_fetch_assoc($res1)) {
              ?>
                <option value="<?php echo $row2['sub_cat_id'] ?>"><?php echo $row2['s_name'] ?></option>

              <?php } ?>
            </select><br>
          <?php } ?>
        </div>

        <div class="form-group">
          <?php
          $uname3 = $row['type_id'];
          $q2 = "SELECT * FROM type where type_id!=$uname3";
          $res2 = mysqli_query($con, $q2) or die("wrong query");
          if (mysqli_num_rows($res1) > 0) {
          ?>

            <label for="type"><span style=" margin-left: 140px;"></span> <b>Choose Type:</b></label>
            <select name="type" id="type">
              <option value="0">Select Type</option>

              <option value="<?php echo $row['type_id'] ?>" selected><?php echo $row['t_name'] ?></option>
              <?php
              while ($row2 = mysqli_fetch_assoc($res2)) {
              ?>
                <option value="<?php echo $row2['type_id'] ?>"><?php echo $row2['t_name'] ?></option>

              <?php } ?>
            </select><br>
          <?php } ?>
        </div>

        <div class="form-group">
          <?php
          $uname4 = $row['unit_id'];
          $q3 = "SELECT * FROM unit where unit_id!=$uname4";
          $res3 = mysqli_query($con, $q3) or die("wrong query");
          if (mysqli_num_rows($res1) > 0) {
          ?>

            <label for="unit"><span style="margin-left: 140px;"></span> <b>Choose Unit:</b></label>
            <select name="unit" id="unit">
              <option value="0">Select Unit</option>

              <option value="<?php echo $row['unit_id'] ?>" selected><?php echo $row['u_name'] ?></option>
              <?php
              while ($row2 = mysqli_fetch_assoc($res3)) {
              ?>
                <option value="<?php echo $row2['unit_id'] ?>"><?php echo $row2['u_name'] ?></option>

              <?php } ?>
            </select><br>
          <?php } ?>
        </div>

        <div class="form-group">
          <label for="image"><span style=" margin-left: 140px;"></span><b> Product Image:</b></label>
          <input type="file" name="image" />"<?php echo $row["image"] ?>"
        </div>
        <div class="form-group">
          <label for="details"><span style=" margin-left: 140px;"></span><b> Product Details:</b></label>
          <input type="text" name="details" value="<?php echo $row["product_details"] ?>">
        </div>


      </div>
    </div>

    <input type="submit" name="update" value="Update" style="margin-left: 290px;">
  </form>









</body>

</html>