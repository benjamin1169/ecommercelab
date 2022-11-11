
<?php

require("../classes/customer_class.php");


function insertCustomer_ctr($name,$email,$password,$country,$city,$contact,$userRole){
  $add_customer= new CustomerClass();
  return $add_customer->insertCustomer_cls($name,$email,$password,$country,$city,$contact,$userRole);
}


function returnCustomer_ctr($email){
  $add_customer= new CustomerClass();
  return $add_customer->returnCustomer_cls($email);
}

/*
function returnCustomer_ctr($email){
  $return_customer= new CustomerClass();
  $view =  $return_customer->returnCustomer_cls($email);
  $cus_array = array();
  
  if($view){
    $temp_hold = $return_customer -> fetchOne($view);
    $cus_array[] = $temp_hold;
  
  }
  return $cus_array;

}*/

// function returnCustomer_ctr($email){
//   $add_customer= new CustomerClass();
//   return $add_customer->returnCustomer_cls($email);
// }


// function addbrand_ctr($brandname){
//   $add_brand= new CustomerClass();
//   return $add_brand->addbrand_cls($brandname);
// }

// function returnBrand_ctr(){
//   $r_brand= new CustomerClass();
//   return $r_brand->returnBrand_cls();
// }

// function updateBrand_ctr($brandname, $id){
//   $update_brand= new CustomerClass();
//   return $update_brand->updatebrand_cls($brandname, $id);
// }

// function addcategory_ctr($categoryname){
//   $add_category= new CustomerClass();
//   return $add_category->addcategory_cls($categoryname);
// }



// function returnCategory_ctr(){
//   $r_category= new CustomerClass();
//   return $r_category->returnCategory_cls();
// }


// function updateCategory_ctr($categoryname, $id){
//   $update_category= new CustomerClass();
//   return $update_category->updatebrand_cls($categoryname, $id);
// }



?>


