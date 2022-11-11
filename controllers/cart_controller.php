<?php
require('../classes/cart_class.php');

function add_customer_cart_controller($id, $ipaddress, $customerid, $quantity){
    $cart_install = new Cart();
    // call the method from the class
    return $cart_install->add_cart_cls($id, $ipaddress, $customerid,  $quantity);
}

function select_all_cart_controller(){
    // create an instance of the Product class
    $cart_install = new Cart();
    // call the method from the class
    return $cart_install->select_all_cart_cls();
}


function select_one_cart_controller(){
    // create an instance of the Product class
    $cart_install = new Cart();
    // call the method from the class
    return $cart_install->select_one_cart_cls();
}
