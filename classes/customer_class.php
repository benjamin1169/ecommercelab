<?php
//connect to database class
require("../settings/db_class.php");


class CustomerClass extends db_connection{

    function insertCustomer_cls($name,$email,$password,$country,$city,$contact,$userRole){
       
        $sqltwo= "INSERT INTO customer (customer_name, customer_email, customer_pass, customer_country, customer_city, customer_contact, user_role) VALUES ('$name','$email','$password','$country','$city','$contact', '$userRole')";
        return $this->query($sqltwo);

    }

    function returnCustomer_cls($email){
            $sqltwo= "SELECT * FROM `customer` WHERE `customer_email` = '$email'";
            return $this->fetchOne($sqltwo);
    
        }

    function addbrand_cls($brandname){
        $sqltwo= "INSERT INTO brands (brand_name) VALUES ('$brandname')";
        return $this->query($sqltwo);
    }
            

    function addcategory_cls($categoryname){
        $sqltwo= "INSERT INTO categories (cat_name) VALUES ('$categoryname')";
        return $this->query($sqltwo);
    }

    function returnBrand_cls(){
        $sqltwo= "SELECT * FROM `brands`";
        return $this->fetch($sqltwo);
    }

    function updatebrand_cls($brandname, $id){
        $sqltwo= "UPDATE brands set brand_name='$brandname' WHERE brand_id='$id'";
        return $this->query($sqltwo);

    }

    function returnCategory_cls(){
        $sqltwo= "SELECT * FROM `categories`";
        return $this->fetch($sqltwo);
    }

    function updatecategory_cls($categoryname, $id){
        $sqltwo= "UPDATE categories set cat_name='$categoryname' WHERE cat_id='$id'";
        return $this->query($sqltwo);

    }


//  //--SELECT--//
// 	 function select_one_customer_cls($id){

        
//            return $this->fetchOne("SELECT * from customer where customer_id='$id'");
//      }

//CHECK WHETHER THE EMAIL EXIST AND THEN GOES INTO THE DATABASE, USE THE EMA
// 	function select_all_customer_cls(){
//         //write the sql
//         $sql ="SELECT * FROM phonebook";
//         //execute the sql
//      return $this->query($sql);

//     return $this->fetch("SELECT * FROM customer");
//     }
    
// 	// //--UPDATE--//
// 	 function updateCustomer_cls($id, $name,$user_email,$password,$country,$city,$contact){

//      return $this->query("update phonebook set customer_name='$name', customer_email='$user_email', customer_pass='$password', customer_country = $country, customer_city = $city , customer_contact = '$contact' where customer_id = '$id'");
//     }

// 	// 	//--DELETE--//
//     function delete_Customer_cls($id){
//       return $this->query("DELETE from customer where customer_id = '$id'");

//     }

//login($email){
    //return $this->query("SELECT * from customer where customer_email = $email)
// }

}
?>