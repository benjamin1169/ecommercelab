<?php

require('../controllers/product_controller.php');

if(isset($_POST['AddBrandButton'])){

    $brandname=$_POST['brandname'];
      
    $result = addbrand_ctr($brandname);
   
    if($result){ 
        header("location: ../admin/brand.php");
    }
    else {
        echo "insertion unsuccessful";
    }


}


?>
