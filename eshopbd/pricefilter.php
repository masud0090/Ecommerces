<?php

    echo $tid=$_POST['tind'];
    echo "<br>";
    echo $minpr= $_POST['price1'];
    echo "<br>";
    echo  $maxpr=$_POST['price2'];
    echo "<br>";
    include "config.php";
    $sql="SELECT * FROM product WHERE type_id='{$tid}'";
    $result=mysqli_query($con,$sql) or die("query failed");
    while($data=mysqli_fetch_assoc($result)){
         $img=$data['image'];
         $nm=$data['p_name'];
        $prc=$data['price'];

  
     $output='<div class="col-lg-4 col-md-6 col-12">';
     echo $data['price'];
     if(($data['price']>$minpr)and ($data['price']<$maxpr)){
       $output .= '<div class="single-product">
        <div class="product-img">
            <a href="#" style="width:80%;height:30vh;">

                <img  src="'.$img.'" alt="#">
            </a>
            <div class="button-head" style="background-color:#333333;padding:0 0.4rem">
                <div class="product-action">
                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#" style="color:#fff;"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                    <a title="Wishlist" href="#" style="color:#fff;"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                    <a title="Compare" href="#" style="color:#fff;"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                </div>
                <div class="product-action-2" >
                    <a title="Add to cart" href="#" style="color:#fff;">Add to cart</a>
                </div>
            </div>
        </div>
        <div class="product-content">
            <h3><a href="#">'.$nm.'</a></h3>
            <div class="product-price">
                <span>'.$prc.'</span>
            </div>
        </div>
    </div>
    </div>';
     }


}


/*
     $minpr= $_POST['price1'];
     $maxpr=$_POST['price2'];
    echo $t=$_POST['tind'];
    include "config.php";
    $sql="SELECT * FROM product  WHERE type_id='{$t}'";
    $result=mysqli_query($con,$sql) or die("query failed");
    while($data=mysqli_fetch_assoc($result)){
        echo $data['price'];
        echo $minpr;
        $img=$data['image'];
         $nm=$data['name'];
         $pr=$data['price'];

        
       $output='<div class="col-lg-4 col-md-6 col-12">
        <div class="single-product">
        <div class="product-img">
            <a href="#" style="width:80%;height:30vh;">

                <img  src="'.$img.'" alt="#">
            </a>
            <div class="button-head" style="background-color:#333333;padding:0 0.4rem">
                <div class="product-action">
                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#" style="color:#fff;"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                    <a title="Wishlist" href="#" style="color:#fff;"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                    <a title="Compare" href="#" style="color:#fff;"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                </div>
                <div class="product-action-2" >
                    <a title="Add to cart" href="#" style="color:#fff;">Add to cart</a>
                </div>
            </div>
        </div>
        <div class="product-content">
            <h3><a href="#">'.$nm.'</a></h3>
            <div class="product-price">
                <span>'.$pr.'</span>
            </div>
        </div>
    </div>
    </div>';
        }
  echo $output;


  */
  echo $output;

?>