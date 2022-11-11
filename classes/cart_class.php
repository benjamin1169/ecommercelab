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
}

