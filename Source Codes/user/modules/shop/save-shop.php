<?php

    include '../../bodyguard.php';
    include '../../functions.php'; 
    include '../../connectdb.php';

    if (isset($_SESSION['email'])) {
        $email = $_SESSION['email']; 

        $user = getUser($email); 
        $user = mysql_fetch_array($user);
    }

    //Get data from the former page via POST method
    $name = $_POST["name"];
    $address = $_POST["address"];
    
    //Add a new shop to the database 
    addNewShop($name, $address);

    $shop = getShop($name, $address);
    $shop = mysql_fetch_array($shop);
    $user_role = 1; //Manager

    updateUser($user["first_name"], $user["last_name"], $user["email"], $shop["id"], $user_role);

    $_SESSION['user_role'] = 'Manager'; //Update session

    //Go to the dashboard
    header("Location: my-shop.php");
    
?>