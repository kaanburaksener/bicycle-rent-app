<?php
	
	include '../../functions.php'; 
    include '../../connectdb.php';

	//Get data from the former page via GET method
	$id = $_GET["id"];

	//Delete the user from the project 
	deleteBicycle($id);
	deleteDisposal($id);

	//Go to the page which shows the list of the project members
	header("Location: manage-bicycles.php");
	
?>