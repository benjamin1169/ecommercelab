<?php
require('../controllers/cart_controller.php');
require('../actions/returnUser.php');

$id = $_GET['id'];

$customerid = $_SESSION['user_id'];

$ipaddress = $_SERVER['REMOTE_ADDR'];

$quantity = '1';

$result = add_customer_cart_controller($id, $ipaddress, $customerid,  $quant);

if($result === true){
    header('Location: ../view/cart.php');
}else{
    echo " failed";
}
?>