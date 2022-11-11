<?php

//CONTROLLER FOR BRAND 

require("../classes/product_class.php");

function addBrand_ctr($brandname){
  $addBrand= new Product();
  return $addBrand->addbrand_cls($brandname);
}
  
  function returnBrand_ctr(){
    $r_brand= new Product();
    return $r_brand->returnBrand_cls();
  }


function select_one_brand_controller($id){
    // create an instance of the Product class
    $brand_oneselection = new Product();
    // call the method from the class
    return $brand_oneselection->select_one_brand($id);
}


function select_all_brands_controller(){
  // create an instance of the Product class
  $brand_allselect= new Product();
  // call the method from the class
  return $brand_allselect->select_all_brands();

}
  function updateBrand_ctr($brandname, $id){
    $update_brand= new Product();
    return $update_brand->updatebrand_cls($brandname, $id);
  }
  


//CONTROLLER FOR CATEGORY 
  function addcategory_ctr($categoryname){
    $add_category= new Product();
    return $add_category->addcategory_cls($categoryname);
  }
  
  function returnCategory_ctr(){
    $r_category= new Product();
    return $r_category->returnCategory_cls();
  }
   
  function select_all_cat_controller(){
    // create an instance of the Product class
    $category_allselect= new Product();
    // call the method from the class
    return $category_allselect->select_all_category();
  }
  
  function updateCategory_ctr($categoryname, $id){
    $update_category= new Product();
    return $update_category->updatebrand_cls($categoryname, $id);
  }
  


// Controller for Product
function add_product_controller($brandname, $categoryname, $ptitle, $pprice, $pdesc, $fileDestination, $key){
  // create an instance of the product class
  $product_install = new Product();
  // call the method from the class
  return $product_install->add_product($brandname, $categoryname, $ptitle, $pprice, $pdesc, $fileDestination, $key );
}


function select_all_product_controller(){
  // create an instance of the Product class
  $product_install = new Product();
  // call the method from the class
  return $product_install->select_all_product();

}

function select_one_product_controller($id){
  // create an instance of the Product class
  $product_install = new Product();
  // call the method from the class
  return $product_install->select_one_product($id);

}

function update_product_controller($id, $brandname, $categoryname, $ptitle, $pprice, $pdesc, $key){
  // create an instance of the Product class
  $product_install = new Product();
  // // call the method from the class
  return $product_install->update_one_product($id, $brandname, $categoryname, $ptitle, $pprice, $pdesc, $key);

}

function select_one_brand($name){
  $product_install = new Product();
  // call the method from the class
  return $product_install->select_one_brand_product($name);
}

function select_one_cat($name){
  $product_install = new Product();
  // call the method from the class
  return $product_install->select_one_cat_product($name);
}
// // /*
 function search_product_controller($query){
     $product_install = new Product();
// call the method from the class
  return $product_install->search_select_product($query);
}

?>