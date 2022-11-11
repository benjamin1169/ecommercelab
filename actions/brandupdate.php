<?php

require('../controllers/customer_controller.php');

if(isset($_POST['editBrand'])){

    $brandname=$_POST['bname'];
    $id=$_POST['bid'];
      
    $result = updateBrand_ctr($brandname, $id);
   
    if($result){ 
        header("location: ../admin/brand.php");
    }
    else {
        echo "insertion unsuccessful";
    }


}


?>
