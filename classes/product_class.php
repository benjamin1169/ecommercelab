<?php


//connect to database class
require("../settings/db_class.php");


class Product extends db_connection{

    //ADD AND UPDATE BRANDS 
    function addbrand_cls($brandname){
        $sqltwo= "INSERT INTO brands (brand_name) VALUES ('$brandname')";
        return $this->query($sqltwo);
    }

    function returnBrand_cls(){
        $sqltwo= "SELECT * FROM `brands`";
        return $this->fetch($sqltwo);
    }

    function select_one_brand($id){
        $sqltwo= "SELECT * FROM `brands` WHERE brand_id ='$id'";
		return $this->fetchOne($sqltwo);
	}

    function select_all_brands(){
		// return array or false
		return $this->fetch("SELECT * FROM brands");
	}

    function updatebrand_cls($brandname, $id){
        $sqltwo= "UPDATE brands set brand_name='$brandname' WHERE brand_id='$id'";
        return $this->query($sqltwo);

    }

    //ADD AND UPDATE CATEGORY 
    function addcategory_cls($categoryname){
        $sqltwo= "INSERT INTO categories (cat_name) VALUES ('$categoryname')";
        return $this->query($sqltwo);
    }
    function returnCategory_cls(){
        $sqltwo= "SELECT * FROM `categories`";
        return $this->fetch($sqltwo);
    }

    function select_one_category($id){
        $sqltwo= "SELECT * FROM `categories` WHERE cat_id ='$id'";
		return $this->fetchOne($sqltwo);
	}

    function select_all_category(){
		// return array or false
		return $this->fetch("SELECT * FROM brands");
	}
    function updatecategory_cls($categoryname, $id){
        $sqltwo= "UPDATE categories set cat_name='$categoryname' WHERE cat_id='$id'";
        return $this->query($sqltwo);

    }

    
    //ADD AND EDIT PRODUCTS

    function add_product($brandname, $categoryname, $ptitle, $pprice, $pdesc, $fileDestination, $key){
		// return true or false
        $sqltwo= "INSERT INTO products (product_cat, product_brand, product_title, product_price, product_desc, product_image, product_keywords ) VALUES ('$categoryname', '$brandname', '$ptitle', '$pprice', '$pdesc','$fileDestination', '$key')";
		return $this->query($sqltwo); 
    }

	function select_all_product(){
		// return array or false
		return $this->fetch("SELECT * FROM products");
	}

	function select_one_product($id){
		// return associative array or false
		return $this->fetchOne("SELECT * FROM products WHERE product_id='$id'");
	}

	function update_one_product($id, $brandname, $categoryname, $ptitle, $pprice, $pdesc, $key){
		// return true or false
        // $sql="UPDATE `products` SET `product_id`='[value-1]',`product_cat`='[value-2]',`product_brand`='[value-3]',`product_title`='[value-4]',`product_price`='[value-5]',`product_desc`='[value-6]',`product_image`='[value-7]',`product_keywords`='[value-8]' WHERE 1";
		return $this->query("UPDATE products SET `product_cat`='$categoryname', `product_brand`='$brandname', `product_title`='$ptitle', `product_price`='$pprice', `product_desc` = '$pdesc', `product_keywords` = '$key'  WHERE `product_id` = '$id'");
	}

	function select_one_brand_product($brandid){
		return $this->fetchOne("SELECT * FROM brands WHERE brand_id='$brandid'");
	}

	function select_one_cat_product($categoryid){
		return $this->fetchOne("SELECT * FROM categories WHERE cat_id='$categoryid'");
	}

    //SEARCH PRODUCT 
	 function search_select_product($query){
	 	return $this->fetch("SELECT * FROM products WHERE (`product_title` like '".$query."%') ");
	 }
}


?>
