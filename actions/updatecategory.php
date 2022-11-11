<?php

require('../controllers/customer_controller.php');

if(isset($_POST['editCategory'])){

    $categoryname=$_POST['cname'];
    $id=$_POST['cid'];
      
    $result = updateCategory_ctr($categoryname, $id);
   
    if($result){ 
        header("location: ../admin/category.php");
    }
    else {
        echo "insertion unsuccessful";
    }

}


?>