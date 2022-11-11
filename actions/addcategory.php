<?php

require('../controllers/customer_controller.php');

if(isset($_POST['AddCategory'])){

    $categoryname=$_POST['categoryname'];
      
    $result = addcategory_ctr($categoryname);
   
    if($result){ 
        header("location: ../admin/category.php");
    }
    else {
        echo "insertion unsuccessful";
    }


}


?>