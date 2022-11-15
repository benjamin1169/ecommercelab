<?php

require('../controllers/product_controller.php');
// return array of all rows, or false (if it failed)
$product = select_one_product_controller($_GET['id']);

$brand =  $product['product_brand'];
$selectbrand = select_one_brand($brand);
$category =  $product['product_cat'];
$searchcategory = select_one_cat($category);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../CSS/bootstrap.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="../CSS/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../CSS/responsive.css">

    <script src="https://kit.fontawesome.com/75618b9696.js" crossorigin="anonymous"></script>
</head>
<body>
    <header style="display: flex; margin-top: 20px;">
    <a href="../mini_index.php"><h3 style="color:#dc3545;">Home</h3></a>
    <div>
       <form method="post" action="../actions/searchprocess.php" style='display: flex'>

        <input type="text" class="form-control mb-0" id="search" name="search" placeholder="Type here to search" style="width: 400px; margin-left: 200px">
        <button style="margin-left: -50px" class="btn btn-primary float-right" type="submit" name="searchbutton">Search</button>

        </form>
</div>

        <a href="../admin/brand.php"><h3 style="color:black; margin-left: 200px;">Brand</h3></a>
        <a href="../admin/category.php"><h3 style="color:black; margin-left: 40px;">Category</p></h3>
        <a href="../view/productadded.php"><h3 style="color:black; margin-left: 40px;">Add Product</p></h3>
        <a href="../admin/productaddandedit.php"><h3 style="color:black; margin-left: 40px;">Edit Product</p></h3>
        <a href="../view/viewcart.php"><h3 style="color: black; margin-left:40px;">Cart</h3></a>
    </header>


        <div class='viewoneproduct' style='display: flex; margin-top: 200px; margin-left: 450px;'>
        <!-- <form method = POST action="viewallproduct.php" -->
            <div class='image'>
            <img style='height: 400px; width: 400px' src="<?php echo $product['product_image'] ?>" alt="">
            </div>

            <div class='content' style='margin-left: 70px'>

                <h1><?php echo $searchbrand['brand_name'] ?></h1>

                <h1><?php echo $searchcat['cat_name'] ?></h1>
                <h4><?php echo $product['product_title'] ?></h4>
                <h4 style='color: grey;'> <?php echo $product['product_price'] ?></h4>
                <h5 style='color: grey;'><?php echo $product['product_desc'] ?></h5>
                <a href='../actions/cartprocess.php?id=<?php echo  $product['product_id'] ?>'  class='btn btn-primary'>Add to Cart</a>

            </div>

</form>

        </div>
        



</body>
</html>
