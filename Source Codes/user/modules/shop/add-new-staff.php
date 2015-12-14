<?php 

	include '../../functions.php'; 
	include '../../connectdb.php'; 

	//Get data from the former page via POST method
	$first_name = $_POST["first-name"];
	$last_name = $_POST["last-name"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$bicycle_outlet_id = $_POST["bicycle-outlet-id"];
	$user_role_id = $_POST["user-role-id"];

	//Add a new staff to the database 
	addNewStaff($first_name, $last_name, $email, $password, $bicycle_outlet_id, $user_role_id);

	header("Location: manage-staffs.php");

?>