<?php

require('../Controllers/cart_controller.php');
// return array of all rows, or false (if it failed)
$cart = get_quantity($_GET["id"]);

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
</head>
<body>

    <header style="display: flex; background-color: #aa9ec2; " >
       <a href="../index.php"><h4 style="margin-left: 10px; color:black;">Lab </h4></a> 
        <a href="../Admin/brand_add_edit.php"><h4 style="color:black; margin-left: 900px;">Brand</h4></a>
        <a href="../Admin/cat_add_edit.php"><h4 style="color:black; margin-left: 40px;">Category</h4></a>
        <a href="../Admin/prod_add_edit.php"><h4 style="color:black; margin-left: 40px;">Product</h4></a>
        <a href="../View/cartView.php"><h4 style="color: black; margin-left:40px;">Cart</h4></a>

    </header>

    <form method="POST" action="../Actions/change_qty.php" >
        <div>
        <div class="form-group" style="margin-left: 500px; margin-top: 200px;">
            <h3 style="font-weight: bold; margin-left: 150px;">Quantity</h3>
            <input type="text" class="form-control mb-0" id="InputDesc" name="qty" value="<?php echo $cart['qty'] ?>" style="width: 400px; font-size: 11pt;">

            <input type="text" style="display:none" class="form-control mb-0" id="InputDesc" name="id" value="<?php echo $cart['p_id'] ?>" style="width: 400px; font-size: 11pt;">

            <p class="error" id="InputDescError"></p>
            <button type="submit" name="updatebtn" style="font-size: medium; border-radius: 8px; border: 10px solid transparent; background-color: #6f42c1; width: 150px; height: 50px; margin-left: 130px; color: white;">Update</button>
        </div>
        </div>
        
    </form>
</body>
</html>