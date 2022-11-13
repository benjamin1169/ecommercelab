<?php
require('../classes/cart_class.php');

function add_customer_cart_controller($id, $ipaddress, $customerid, $quantity){
    $cart_install = new Cart();
    // call the method from the class
    return $cart_install->add_cart_cls($id, $ipaddress, $customerid, $quantity);
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

function remove_cart_controller($id, $ip){
    $cart_install = new Cart();
    // call the method from the class
    return $cart_install->remove_one_cart($id, $ip);

}

function get_quantity($id){
    $cart_install = new Cart();
    // call the method from the class
    return $cart_install->get_qty($id);
}

function update_qty($id, $qty){
    $cart_install = new Cart();
    // call the method from the class
    return $cart_install->get_quantity($id, $qty);
}

// get total
function get_total_controller($id){
    $cart_install = new Cart();
    // call the method from the class
    return $cart_install->get_total($id);
}

function add_order_controller($cus_id, $invoice_number, $date, $status){
    $cart_install = new Cart();
    // call the method from the class
    return $cart_install->add_order_class($cus_id, $invoice_number, $date, $status);
}

function get_cus_info($cus_id){
    $cart_install = new Cart();
    // call the method from the class
    return $cart_install->get_cus_info_class($cus_id);

}


function add_order_details_controller($order_id, $product_id, $quantity){
    $cart_instance = new Cart();
    // call the method from the class
    return $cart_instance->add_order_details_class($order_id, $product_id, $quantity);
}


function add_payment_controller($cus_id, $order_id, $amount, $currency, $date){
    $cart_instance = new Cart();
    // call the method from the class
    return $cart_instance->add_payment_class($cus_id, $order_id, $amount, $currency, $date);
}


function delete_from_cart_controller($cus_id){

    $cart_instance = new Cart();
    // call the method from the class
    return $cart_instance->delete_class($cus_id);    
}

?>

