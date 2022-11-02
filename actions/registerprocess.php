<?php

require('../controllers /customer_controller.php');

if(isset($_POST['Register'])){

    $name=$_POST['name'];
    $email=$_POST['email']; 
    $password=$_POST['password']; 
    $country=$_POST['country'];
    $city=$_POST['city']; 
    $contact=$_POST['contact'];
    $userRole= 2;
    
    $result = insertCustomer_ctr($name,$email,$password,$country,$city,$contact,$userRole);
   
    if($result){ 
        header("location: ../view/user_form.php");
    }
    else {
        echo "insertion unsuccessful";
    }


}


?>




