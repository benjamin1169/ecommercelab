<?php
require('../controllers/cart_controller.php');
require('../settings/core.php');

$id = $_GET['id'];
$ip= getenv("REMOTE_ADDR");

$result = remove_cart_controller($id, $ip);

if($result === true){
    header('Location: ../view/viewcart.php');
}else{
    echo " Could not remove from cart";
}
?>