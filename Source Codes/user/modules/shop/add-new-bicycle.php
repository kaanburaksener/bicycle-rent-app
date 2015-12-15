<?php
	include '../../functions.php'; 
	include '../../connectdb.php';

	//Get data from the former page via POST method
	$name = $_POST["name"];
    $brand_id = $_POST["brand-id"];
    $type_id = $_POST["type-id"];
    $gear_number = $_POST["gear-number"];
    $wheel_size = $_POST["wheel-size"];
    $rent_price_hour = $_POST["rent-price-hour"];
    $rent_discount_hour = $_POST["rent-discount-hour"];
    $rent_discount_percent = $_POST["rent-discount-percent"];
    $bicycle_outlet_id = $_POST["bicycle-outlet-id"];

	//Add a new bicycle to the database 
	addNewBicycle($name, $brand_id, $type_id, $gear_number, $wheel_size, $rent_price_hour, $rent_discount_hour, $rent_discount_percent);

	$bicycle_id = getLastAddedBicycle();
	$bicycle_id = mysql_fetch_array($bicycle_id);

	addDisposal($bicycle_outlet_id, $bicycle_id[0]);

	//Go to the page which shows the list of the bicycle brands
	header("Location: manage-bicycles.php");
?>