<?php 

    include '../../functions.php'; 
    include '../../connectdb.php';

    //Get data from the former page via POST method
    $id = $_POST["id"];
    $name = $_POST["name"];
    $address = $_POST["address"];

    //Update shop
    updateShop($id, $name, $address);

    //Go to the project detail page
    header("Location: shop.php");

?>