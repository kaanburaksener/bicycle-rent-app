<?php

	session_start();

	if($_SESSION['email'] == null ) {
		header('location: login.php');	
	} 

?>