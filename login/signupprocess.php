<?php

require('../controllers/userController.php');
require('../settings/core.php');

// check if theres a POST variable with the name 'addProductButton'
 if(isset($_POST['customerUserButton'])){
    // retrieve the name, description and quantity from the form submission
    $email = $_POST['Email'];
    $password = $_POST['Password'];
 
    // call the add_user_controller function: return true or false
    $result = returnCustomer_ctr($email);


    //check whether the email 
    $passwords = $result["customer_pass"];

    $work = password_verify($password,$result["customer_pass"]);

    if($work){


        $_SESSION['user_id'] = $result["customer_id"];
        $_SESSION["user_role"] = $result["user_role"];
        $_SESSION['user_name'] = $result['customer_name'];

        if ($_SESSION['user_role'] == 1){
            header("Location: ../admin/index.php");
        }else{
            header("Location: ../home.php");
        }
 
    }else{
        header("Location: ../Register/signIn.php");
    } 

    // $results = password_verify($password, $result['customer_pass']);

    

}

?>