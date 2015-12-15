<?php

    include '../../functions.php'; 
    include '../../connectdb.php';

    //Get data from the former page via POST method
    $first_name = $_POST["first-name"];
    $last_name = $_POST["last-name"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];

    addNewCustomer($first_name, $last_name, $address, $phone);
    
    $customer_id = getLastRegisteredCustomer();
    $customer_id = mysql_fetch_array($customer_id);

    $rented_outlet_staff_id = $_POST["rented-outlet-staff-id"];
    $bicycle_id = $_POST["bicycle-id"];

    addNewOrder($rented_outlet_staff_id, $customer_id[0], $bicycle_id);

    //Go to the dashboard
    header("Location: add-new-order.php");
    
?>