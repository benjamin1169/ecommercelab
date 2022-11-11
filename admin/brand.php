<?php
require_once("../controllers/product_controller.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brands</title>
</head>
<body>
    <form action="../actions/brandAction.php" method="post">
    <input type="text" name="brandname" placeholder="Add new brand">
    <button type="submit" name="AddBrandButton">AddBrandButton</button>
    </form>

    <p>Edit your brand names here</p>
    <table>
    <tr>
        <th>Original Brand Name</th>
        <th>New Brand Name</th>
        <th>Action</th>
    </tr>


    <?php $list = returnBrand_ctr(); foreach($list as $input){?>
    <tr>
        <form action="../actions/brandupdate.php" method="POST">
        <td><?php echo $input['brand_name'] ?> <input hidden type='number' name="bid" value="<?php echo $input['brand_id'] ?>"></td>
        <td> <input type="text" name="bname" placeholder="Input new name here"> </td>
        <td> <input type="submit" name="editBrand" value="Edit"> </td>
        </form>
    </tr>
    <?php } ?>
    </table>

</body>
</html>