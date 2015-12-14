<?php 

	include '../../functions.php'; 
	include '../../connectdb.php'; 

	//Get data from the former page via POST method
	$first_name = $_POST["first-name"];
	$last_name = $_POST["last-name"];
	$email = $_POST["email"];
	$bicycle_outlet_id = "";
	$user_role_id = "";

	if (isset($_POST["bicycle-outlet-id"]) AND isset($_POST["user-role-id"])) {
		$bicycle_outlet_id = $_POST["bicycle-outlet-id"];
		$user_role_id = $_POST["user-role-id"];
	}
	
	//Add a new user to the database 
	updateUser($first_name, $last_name, $email, $bicycle_outlet_id, $user_role_id);

	//Go to the login page
	header("Location: ../../dashboard.php");

?>