<?php
require('../settings/db_class.php');

// inherit the methods from Connection

class Cart extends db_connection{
    function add_cart_cls($id, $ipaddress, $customerid, $quantity){
        // return true or false
        return $this->query("INSERT into cart(p_id, ip_add, c_id, qty) VALUES ('$id',  '$ipaddress', '$customerid', '$quantity')");
    }

    function select_all_cart_cls(){
        // return array or false
        return $this->fetch("SELECT * FROM `cart` left join products on p_id = product_id");
    }

    function select_one_cart_cls(){
        // return array or false
        return $this->fetchOne("SELECT * FROM `cart` left join products on p_id = product_id");
    }


    function remove_one_cart($id, $ip){
        // return array or false
        return $this->query("DELETE FROM cart WHERE p_id =  '$id' and ip_add = '$ip' ");
    }

    function get_qty($id){

        return $this->fetchOne("SELECT * FROM cart WHERE p_id = '$id' ");

    }

    function get_quantity($id, $qty){

        return $this->query("UPDATE cart set qty='$qty' WHERE p_id = '$id' ");

    }

    function get_total($id){
        return $this->fetch("SELECT SUM(qty * product_price) as sum FROM cart inner join products on p_id = product_id WHERE c_id = '$id'");
    }

    function add_order_class($cus_id, $invoice_number, $date, $status){

        return $this->final_index("INSERT into orders (customer_id, invoice_no, order_date, order_status) VALUES ('$cus_id', '$invoice_number', '$date', '$status')");
        
    }

    function get_cus_info_class($cus_id){
        return $this->fetch("SELECT * FROM cart WHERE c_id = '$cus_id' ");

    }

    function add_order_details_class($order_id, $product_id, $quantity){

        return $this->query("INSERT into orderdetails (order_id, product_id, qty) VALUES ('$order_id',  '$product_id', '$quantity')  ");

    }

    function add_payment_class($cus_id, $order_id, $amount, $currency, $date){

        return $this->query("INSERT into payment (amt, customer_id, order_id, currency, payment_date)  VALUES ('$amount',  '$cus_id', '$order_id', '$currency', '$date' )  ");

    }

    function delete_class($cus_id){

        return $this->query("DELETE from cart WHERE c_id = '$cus_id' ");

    }
}