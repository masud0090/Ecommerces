<?php
    include "config.php";
    $list_item=$_POST['listtext'];
    if($list_item=='order list'){
       $output='<div class="row">
                <div class="col-xl-10 col-lg-10 col-md-11 col-11 mx-auto">
                    <div class="content" syle="">
                        <ul style="display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;">
                            <li style="margin:2% 0;width:100%;font-size:1.5rem; padding:2%; background-color:#CBCBCB">Total order lists</li>
                            <li style="margin:2% 0;width:100%;font-size:1.5rem; padding:2%; background-color:#C6D1D8">order processing</li>
                            <div class="" style="width:100%;display:flex;flex-direction:row;align-items:center;justify-content:center;">
                                <li style="width:40%;margin:2% 1%;font-size:1.5rem; padding:2%; background-color:#DFF0D8">order cancel</li>
                                <li style="width:40%;margin:2% 1%;font-size:1.5rem; padding:2%; background-color:#DFF0D8">refund</li>
                            </div>
                            <li style="margin:2% 0;width:100%;font-size:1.5rem; padding:2%; background-color:#CBCBCB">Product delivered</li>
                        </ul>
                    </div>
                </div>
       </div>';
       echo $output;
    }
   else if($list_item=='wish list'){
        echo "total wish list";
    }
    else if($list_item=='my info'){
        $sql="SELECT * FROM customer WHERE customer_id='5'";
        $result=mysqli_query($con,$sql) or die("query failed");
        $data=mysqli_fetch_assoc($result);

        echo $output='<form>
        <div class="form-group">
          <label for="exampleFormControlInput1">Name</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" value="'.$data['first_name'].' '.$data['last_name'].'">
        </div>
        <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" value="'.$data['email'].'">
      </div>
      <div class="form-group">
      <label for="exampleFormControlInput1">Mobile no</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" value="'.$data['phone'].'">
    </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" value="'.$data['Address'].'">
  </div>
  <div class="form-group">
  <label for="exampleFormControlInput1">Billing address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" value="'.$data['billing_address'].'">
</div>
<div class="form-group">
<label for="exampleFormControlInput1">Email address</label>
<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="form-group">
<label for="exampleFormControlInput1">Email address</label>
<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="form-group">
<label for="exampleFormControlInput1">Email address</label>
<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
      </form>';
    }
    else{

    }
?>