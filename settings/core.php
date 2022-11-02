<?php
//start session
session_start(); 


//for header redirection
ob_start();

//function to check for login


//function to get user ID


//function to check for role (admin, customer, etc)


//logout

if(isset($_GET['logout']) && $_GET['logout'] == 'true'){
    session_unset();
    session_destroy();
    header('location: ../');
}



?>