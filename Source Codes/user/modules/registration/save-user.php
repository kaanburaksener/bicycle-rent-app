<?php 

	include '../../functions.php'; 
	include '../../connectdb.php'; 

	//Get data from the former page via POST method
	$first_name = $_POST["first-name"];
	$last_name = $_POST["last-name"];
	$email = $_POST["email"];
	$password = $_POST["password"];

	//Add a new user to the database 
	addNewUser($first_name, $last_name, $email, $password);

	//Go to the login page
	header("Location: ../../login.php");

?>