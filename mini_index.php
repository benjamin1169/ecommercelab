<?php
require('./Settings/core.php');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../CSS/bootstrap.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="../CSS/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../CSS/responsive.css">

    <script src="https://kit.fontawesome.com/75618b9696.js" crossorigin="anonymous"></script>
</head>
<body>
 
    
<div class="introSteps" style="margin-left: 280px; margin-top: 250px;">
    <h1 style="color: #fd7e14; font-size: 70px; "><em>Welcome to Benjamin's E-commerce Labs</em></h1>

    <div class="links" style=" text-decoration: none;">
        <button type="submit" style="font-size: medium; border-radius: 8px; border: 10px solid transparent; background-color: #fd7e14; width: 150px; height: 80px; margin-right: 50px; margin-left: 250px;"><a style="text-decoration: none; color: white;" href="./view/login.php">Login</a></button>
        <button type="submit" style="font-size: medium; border-radius: 8px; border: 10px solid transparent; background-color: #fd7e14; width: 150px; height: 80px; "><a style="color: white; text-decoration: none;" href="./view/user_form.php">Register</a></button>

        <?php
        if(isset($_SESSION["user_role"])){
            if($_SESSION["user_role"] === "1"){
                echo "
                
                <br>
                <br>
                <br>
                <button type='submit' style='font-size: medium; border-radius: 8px; border: 10px solid transparent; background-color: #fd7e14; width: 200px; height: 80px; margin-right: 50px; margin-left: 250px;'><a style='text-decoration: none; color: white;' href='./admin/brand.php'>Brand</a></button>
                <button type='submit' style='font-size: medium; border-radius: 8px; border: 10px solid transparent; background-color: #fd7e14; width: 200px; height: 80px; '><a style='color: white; text-decoration: none;' href='./admin/category.php'>Category</a></button>
                <br>
                <br>
                <br>
                <button style='font-size: medium; border-radius: 8px; border: 10px solid transparent; background-color: #fd7e14; width: 150px; height: 80px; margin-right: 50px; margin-left: 250px;'><a style='text-decoration: none; color: white;' href='../admin/productadd.php'>Add Product</a></button>
                <button style='font-size: medium; border-radius: 8px; border: 10px solid transparent; background-color: #fd7e14; width: 150px; height: 80px; margin-right: 50px; margin-left: 250px;'><a style='text-decoration: none; color: white;' href='../admin/productaddandedit.php'>Edit Product</a></button>
                <button style='font-size: medium; border-radius: 8px; border: 10px solid transparent; background-color: #fd7e14; width: 150px; height: 80px; '><a style='color: white; text-decoration: none;' href='../view/cart.php'>Cart</a></button>
                
                ";
            }
        }
        
        

        ?>
    </div>
    
</div>






</body>
</html>



<body>
        <div
            style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 90vh; max-height: 90vh;">
            <h1 style="font-size: 5rem;">Hello <?php if(isset($_SESSION['user_name'])){ echo $_SESSION['user_name']; } else {echo 'user'; }?>, Welcome to our Online Store!</h1>
            <a style="font-size: 1.5rem;" href="view/login.php">Login</a>
            <a style="font-size: 1.5rem;" href="view/user_form.php">Signup</a>
            <a style="font-size: 1.5rem;" href="view/user_form.php">Signup</a>
            <?php if(isset($_SESSION['user_role']) && $_SESSION['user_role'] == 1) { ?>
                <a style="font-size: 1.5rem;" href="mini_index.php">Admin</a>
                

                <?php } ?>
            <?php if(isset($_SESSION['user_role'])) { ?>

            <a style="font-size: 1.5rem;" href="settings/core.php?logout=true">Logout</a>
                <?php } ?>
            
        </div>        
</body>
</html>

