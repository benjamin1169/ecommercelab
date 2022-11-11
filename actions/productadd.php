<?php

require('../controllers/product_controller.php');


// check if theres a POST variable with the name 'addButton'
if(isset($_POST['addButton'])){
    // retrieve the name, description and quantity from the form submission
    $brandname = $_POST['brandname'];
    $categoryname = $_POST['categoryname'];
    $ptitle = $_POST['ptitle'];
    $pprice = $_POST['pprice'];
    $pdesc= $_POST['pdesc'];
    // $img = $_FILES['file'];
    $key = $_POST['keyword'];


    $file= $_FILES['file'];
    $filename= $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError= $_FILES['file']['error'];
    $FileType = $_FILES['file']['type'];

    $fileExt= explode('.', $filename);
    $fileActualExt = strtolower(end($fileExt));

    // selecting the type of file
    $permit = array('jpg', 'jpeg', 'png', 'pdf');

    // checking the type of file
    if (in_array($fileActualExt, $permit)) {
        if($fileError === 0){
            if($fileSize < 500000){
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = '../images/'.$fileNameNew;
                $move= move_uploaded_file($fileTmpName, $fileDestination);
                
            }else{
                echo "The file is large";
            }
        }else{
            echo "An error occurred while uploading your file";
        }
    } else{
        echo "Unfortunately you cannot upload this kind of file";
    }



    $result = add_product_controller($brandname, $categoryname, $ptitle, $pprice, $pdesc, $fileDestination, $key);


    if ($result === true ){ header("Location: ../index.php");}
   
    else{ header("Location: ../index.php");}

}


?>
