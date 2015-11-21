<?php
	//GLOBALS

	$link = NULL;

	//Connect Database
	
	function connectDb($host,$database,$user,$password) {
		$mysql_host = $host;
		$mysql_database = $database;
		$mysql_user = $user; 	  
		$mysql_password =$password;

	  $link=mysql_connect($mysql_host,$mysql_user,$mysql_password);

	   if (!$link) {
			  die('Could not connect: ' . mysql_error());
			} else {
		    mysql_select_db($mysql_database,$link);
	      mysql_query("SET NAMES UTF8");
		  }
  	}

  	/***************************
	  BICYCLE OUTLET
  	****************************/

  	//Adds a new bicycle outlet to the database

  	function addBicycleOutlet($name, $address){
  		$query = "INSERT INTO bicycle_outlet (name, address) VALUES ('".$name."','".$address."')" ; 
  		$result = mysql_query($query) or  trigger_error(mysql_error()." ".$query);
    }

    //Gets all bicycle outlets from the database

    function getAllBicycleOutlets(){
    	$query = "SELECT * FROM bicycle_outlet";
    	$result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

    	return $result;
    }

    //Gets a specific bicycle outlet from the database

    function getBicycleOutlet($id){
    	$query = "SELECT * FROM bicycle_outlet WHERE id='".$id."'";
    	$result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

    	return $result;
    }

    //Deletes a bicycle outlet from the database

    function deleteBicycleOutlet($id){
    	$query ="DELETE FROM bicycle_outlet WHERE id='".$id."'";
    	$result = mysql_query($query) or trigger_error(mysql_error()." ".$query);
    }

    //Updates a bicycle outlet on the database

    function updateBicycleOutlet($name, $address){
    	$query = "UPDATE bicycle_outlet SET name='".$name."', address='".$address."' WHERE id='".$id."'";
    	$result = mysql_query($query) or trigger_error(mysql_error()." ".$query);
    }

    /***************************
    BICYCLE BRAND
    ****************************/
    
    /***************************
    HELPER FUNCTIONS
    ****************************/

    //Converts the given date to YMD format
  	function convertDateFormat($date){
  		$date = date('Y-m-d', strtotime($date));
       	return preg_replace('/\s+/', '', $date);
    }
?>  