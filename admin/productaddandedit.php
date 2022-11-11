<?php

require('../controllers/product_controller.php');
// return array of all rows, or false (if it failed)
$product= select_all_product_controller();

$brands = select_all_brands_controller();

$category = select_all_cat_controller();


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
    <!-- <header style="display: flex; margin-top: 20px; " >
       
        <a href="../Admin/brand_add_edit.php"><h4 style="color:black; margin-left: 900px;">Brand</h4></a>
        <a href="../Admin/cat_add_edit.php"><h4 style="color:black; margin-left: 40px;">Category</h4></a>
        <a href="../Admin/prod_add_edit.php"><h4 style="color:black; margin-left: 40px;">Product</h4></a>
        <a href="../View/cartView.php"><h4 style="color: black; margin-left:40px;">Cart</h4></a>

    </header> -->


	<table class="table">
		
		<div class="miniT" style="margin-top: 140px; margin-left: 140px; color: #808000; ">
			<h1 style="font-size: 60px; margin-left: 400px;">Product List</h1>
			<thead >
				<tr>
					<th>Title</th>
                    <th>Price</th>
                    <th>Description</th>
			
                    <th>Keyword</th>
                    <!-- <th>Image</th> -->
                    <th>Update</th>

					<th></th>
				</tr>
			</thead>
		</div>
        

        <tbody>
			<?php
			foreach($product as $x){
				echo 
				"
				<tr>
                    
                    <td>{$x['product_title']}</td>
                    <td>{$x['product_price']}</td>
                    <td>{$x['product_desc']}</td>
                    
                    <td>{$x['product_keywords']}</td>

					
					<td><a href='../view/updateproduct.php?id={$x['product_id']}'>Update</a></td>
				</tr>
				";
			}

			?>

		
        </tbody>
    </table>
    
    <!-- <option value={$brand['brand_id']}>{$brand['brand_name']}</option>
                    <option value={$category['cat_id']}>{$category['cat_name']}</option> -->
                    <!-- <td>{$x['product_image']}</td> -->
</body>
</html>