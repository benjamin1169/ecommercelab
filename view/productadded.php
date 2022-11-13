<?php

require('../controllers/product_controller.php');
// return array of all rows, or false (if it failed)
// $brand = select_all_brands_controller();
// $category = select_all_cat_controller();

// var_dump($category);
// return;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
        <!-- <a href="../admin/brand.php">Brand</a>
        <a href="../admin/category.php">Category</a>
        <a href="../admin/productaddandedit.php">Product</a> -->
        <!-- <a href="../View/cartView.php">Cart</a> -->

<header>Add Products</header>
</header>



    <form action="../actions/productadd.php" method="POST" id="productaddform" enctype="multipart/form-data">
            <label for="brand">Product Brand</label><br>
            <select name="brandname" id="brandname" style="width: 400px;">
                <option value="1">Kindly choose a brand</option>
                
                <?php
                $brandname = returnBrand_ctr();
                    foreach($brandname as $brandlist){
                        echo "
                        <option value=".$brandlist['brand_id'].">".$brandlist['brand_name']."</option>
                        ";
                    }
                ?>
            </select>
        
       <br>
       <div class="dropdown">
            <label for="brand">Product Category</label><br>
            <select name="categoryname" id="category" style="width: 400px; margin-bottom: 20px;">
                <option value="1">Kindly choose a category</option>
                
                <?php
                $catname = returnCategory_ctr();
                foreach($catname as $catlist){
                        echo "
                        <option value=".$catlist['cat_id'].">".$catlist['cat_name']."</option>
                        ";
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
            <h5 style="font-weight: lighter;">Product Title</h5>
            <input type="text" class="form-control mb-0" id="ptitle" name="ptitle" placeholder="Enter a product title" style="width: 400px; font-size: 11pt;">
            <p class="error" id="ptitleError"></p>
        </div>
        <div class="form-group">
            <h5 style="font-weight: lighter;">Product Price</h5>
            <input type="number" class="form-control mb-0" id="pprice" name="pprice" placeholder="Enter a product price" style="width: 400px; font-size: 11pt;">
            <p class="error" id="ppriceError"></p>
        </div>
        <div class="form-group">
            <h5 style="font-weight: lighter;">Product Description</h5>
            <input type="text" class="form-control mb-0" id="pdesc" name="pdesc" placeholder="Enter the product description" style="width: 400px; font-size: 11pt;">
            <p class="error" id="pdescError"></p>
        </div>
        <div class="imageform">
            <h5 style="font-weight: lighter;">Product Image</h5>
                <input type="file" id="file" name="file">
        </div>
        <div class="form-group" style="margin-top: 20px">
            <h5 style="font-weight: lighter;">Product Keyword</h5>
            <input type="text" class="form-control mb-0" id="keyword" name="keyword" placeholder="Enter a product keyword" style="width: 400px; font-size: 11pt;">
            <p class="error" id="keywordError"></p>
        </div><!--
        <input type="submit"  style="color: white; margin-left: 130px; font-size: medium; border-radius: 8px; border: 10px solid transparent; background-color: #6f42c1; width: 130px; height: 50px; " name="addButton" value="Submit">-->
        <input type="submit" name="addButton" value="Submit">

        </div>
        
        </div>

    </form>
    
    
</body>
</html>