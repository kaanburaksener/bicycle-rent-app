<?php

    include '../../functions.php'; 
    include '../../connectdb.php';

    //Get data from the former page via POST method
    $id = $_POST["order-id"];
    $returned_time = $_POST["returned-time"];
    $returned_bicycle_outlet_user_id = $_POST["returned-bicycle-outlet-user-id"];  
    $rented_time = $_POST["rented-time"];
    $bicycle_info_id = $_POST["bicycle-info-id"];

    $sum_before_discount = 0;
    $hour_discount = 0;
    $total_order_sum = 0;

    $bicycle = getBicycle($bicycle_info_id);
    $bicycle = mysql_fetch_array($bicycle);

    $rent_price_hour = $bicycle["rent_price_hour"];
    $rent_discount_hour = $bicycle["rent_discount_hour"];
    $rent_discount_percent = $bicycle["rent_discount_percent"];

    $total_hours = timeDifference($rented_time, $returned_time);

    $sum_before_discount = $rent_price_hour * $total_hours;

    if ($total_hours >= $rent_discount_hour) {
        $hour_discount = ($rent_discount_percent / 100) * $sum_before_discount;
    }

    $total_order_sum = $sum_before_discount - $hour_discount;

    finalizeOrder($id, $returned_bicycle_outlet_user_id, $returned_time, $hour_discount, $sum_before_discount, $total_order_sum);

    //Go to the dashboard
    header("Location: add-new-order.php");
    
?>