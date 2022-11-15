<?php

require('../controllers/cart_controller.php');
require('../settings/core.php');

// check if theres a POST variable with the name 'addButton'
if(isset($_POST['Updatebutton'])){

    $id = $_POST["id"];
    $qty = $_POST["qty"];

    // echo $id;
    // echo $qty;
    // return;


    $result = update_quantity($id, $qty);

    if($result === true){
        header('Location: ../view/viewcart.php');
    }else{
        echo " Unfortunately failed to change quantity";
    }

}



?>