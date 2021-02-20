<?php

    $tid=$_POST['typeid'];
    include "config.php";
    $sql="SELECT * FROM product WHERE sub_cat_id='{$tid}'";
    $result=mysqli_query($con,$sql) or die("query failed");
    while($data=mysqli_fetch_assoc($result)){
         $img=$data['image'];
         $nm=$data['p_name'];
   

        
        echo $output='<div class="col-lg-4 col-md-6 col-12">
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
                <span>$29.00</span>
            </div>
        </div>
    </div>
    </div>';

}

    

?>