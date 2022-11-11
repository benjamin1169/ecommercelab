<?php
session_start();

include('../controllers/product_controller.php');
// require("../controllers/product_controller");
if (isset($_POST['EditButton'])) {
    
    $id = $_SESSION["product_id"];
    $brandname = $_POST['brandname'];
    $categoryname = $_POST['categoryname'];
    $ptitle = $_POST['ptitle'];
    $pprice = $_POST['pprice'];
    $pdesc= $_POST['pdesc'];
    // $img = $_POST['file'];
    $key = $_POST['keyword'];
    $results= update_product_controller($id, $brandname, $categoryname, $ptitle, $pprice, $pdesc, $key);
    // var_dump($results);
        if ($results === true) {
      header("Location: ../admin/productaddandedit.php");

 } else {
        header("Location: ../view/updateproduct.php");
     }
    



}




// if(isset($_POST['EditButton'])){
//     echo "heree";
    // $id = $_POST['id'];
    // $brandname = $_POST['brandname'];
    // $categoryname = $_POST['categoryname'];
    // $ptitle = $_POST['ptitle'];
    // $pprice = $_POST['pprice'];
    // $pdesc= $_POST['pdesc'];
    // // $img = $_POST['file'];
    // $key = $_POST['keyword'];

    // $results= update_product_controller($id, $brandname, $categoryname, $ptitle, $pprice, $pdesc, $key);

    // if($results === true) header("Location: ../index.php");
    // else header("Location: ../view/updateproduct.php");

// }

?>