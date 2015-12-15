<?php

    include '../../functions.php'; 
    include '../../connectdb.php';

    //Get data from the former page via POST method
    $customer_id = $_POST["outlet-customer-id"];
    $rented_outlet_staff_id = $_POST["rented-outlet-staff-id"];
    $bicycle_id = $_POST["bicycle-id"];

    addNewOrder($rented_outlet_staff_id, $customer_id, $bicycle_id);

    //Go to the dashboard
    header("Location: add-new-order.php");
    
?>