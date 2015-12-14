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
    BICYCLE
    ****************************/

    //Adds a new bicycle to the database

    function addNewBicycle($name, $brand_id, $type_id, $gear_number, $wheel_size, $rent_price_hour, $rent_discount_hour, $rent_discount_percent) {
      $query = "INSERT INTO bicycle_info (name, brand_id, type_id, gear_number, wheel_size, rent_price_hour, rent_discount_hour, rent_discount_percent) VALUES ('".$name."','".$brand_id."', '".$type_id."', '".$gear_number."', '".$wheel_size."', '".$rent_price_hour."', '".$rent_discount_hour."', '".$rent_discount_percent."')" ; 
      $result = mysql_query($query) or  trigger_error(mysql_error()." ".$query);
    }

    //Gets the number of all bicycles from the database

    function getNumberOfBicycles(){
      $query = "SELECT COUNT(*) FROM bicycle_info";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

      return $result;
    }

    //Gets a specific bicycle from the database

    function getBicycle($id){
      $query = "SELECT * FROM bicycle_info WHERE id='".$id."'";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

      return $result;
    }

    //Gets all the bicycles from the database

    function getAllBicycles(){
      $query = "SELECT * FROM bicycle_info";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

      return $result;
    }

    //Deletes a bicycle from the database

    function deleteBicycle($id){
      $query ="DELETE FROM bicycle_info WHERE id='".$id."'";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);
    }

    //Updates a bicycle on the database

    function updateBicycle($id, $name, $brand_id, $type_id, $gear_number, $wheel_size, $rent_price_hour, $rent_discount_hour, $rent_discount_percent){
      $query = "UPDATE bicycle_info SET name='".$name."', brand_id='".$brand_id."', type_id='".$type_id."', gear_number='".$gear_number."', wheel_size='".$wheel_size."', rent_price_hour='".$rent_price_hour."', rent_discount_hour='".$rent_discount_hour."', rent_discount_percent='".$rent_discount_percent."'  WHERE id='".$id."'";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);
    }
	
    /***************************
    BICYCLE BRAND
    ****************************/

    //Adds a new bicycle brand to the database

    function addNewBicycleBrand($name){
      $query = "INSERT INTO bicycle_brand (name) VALUES ('".$name."')" ; 
      $result = mysql_query($query) or  trigger_error(mysql_error()." ".$query);
    }

    //Gets all bicycle brands from the database

    function getAllBicycleBrands(){
      $query = "SELECT * FROM bicycle_brand ORDER BY name ASC";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

      return $result;
    }

    //Gets the number of all bicycle brands from the database

    function getNumberOfBicycleBrands(){
      $query = "SELECT COUNT(*) FROM bicycle_brand";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

      return $result;
    }

    //Gets a specific bicycle brand from the database

    function getBicycleBrand($id){
      $query = "SELECT * FROM bicycle_brand WHERE id='".$id."'";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

      return $result;
    }

    //Deletes a bicycle brand from the database

    function deleteBicycleBrand($id){
      $query ="DELETE FROM bicycle_brand WHERE id='".$id."'";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);
    }

    //Updates a bicycle brand on the database

    function updateBicycleBrand($id, $name){
      $query = "UPDATE bicycle_brand SET name='".$name."' WHERE id='".$id."'";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);
    }

  	/***************************
	  BICYCLE OUTLET
  	****************************/

  	//Adds a new bicycle outlet to the database

  	function addNewBicycleOutlet($name, $address){
  		$query = "INSERT INTO bicycle_outlet (name, address) VALUES ('".$name."','".$address."')" ; 
  		$result = mysql_query($query) or  trigger_error(mysql_error()." ".$query);
    }

    //Gets all bicycle outlets from the database

    function getAllBicycleOutlets(){
    	$query = "SELECT * FROM bicycle_outlet ORDER BY id ASC";
    	$result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

    	return $result;
    }

    //Gets the number of all bicycle outlets from the database

    function getNumberOfBicycleOutlets(){
      $query = "SELECT COUNT(*) FROM bicycle_outlet";
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

    function updateBicycleOutlet($id, $name, $address){
    	$query = "UPDATE bicycle_outlet SET name='".$name."', address='".$address."' WHERE id='".$id."'";
    	$result = mysql_query($query) or trigger_error(mysql_error()." ".$query);
    }

    /***************************
    BICYCLE TYPE
    ****************************/
  
    //Adds a new bicycle type to the database

    function addNewBicycleType($name){
      $query = "INSERT INTO bicycle_type (name) VALUES ('".$name."')" ; 
      $result = mysql_query($query) or  trigger_error(mysql_error()." ".$query);
    }

    //Gets all bicycle types from the database

    function getAllBicycleTypes(){
      $query = "SELECT * FROM bicycle_type ORDER BY name ASC";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

      return $result;
    }

    //Gets the number of all bicycle outlets from the database

    function getNumberOfBicycleTypes(){
      $query = "SELECT COUNT(*) FROM bicycle_type";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

      return $result;
    }

    //Gets a specific bicycle type from the database

    function getBicycleType($id){
      $query = "SELECT * FROM bicycle_type WHERE id='".$id."'";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

      return $result;
    }

    //Deletes a bicycle type from the database

    function deleteBicycleType($id){
      $query ="DELETE FROM bicycle_type WHERE id='".$id."'";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);
    }

    //Updates a bicycle type on the database

    function updateBicycleType($id, $name){
      $query = "UPDATE bicycle_type SET name='".$name."' WHERE id='".$id."'";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);
    }

	/***************************
	USER ROLE
    ****************************/
	
	function addNewUserRole($name) {
		$query = "INSERT INTO user_role (name) VALUES ('".$name."')";
		$result = mysql_query($query) or  trigger_error(mysql_error()." ".$query);
	}
	function getAllUserRoles() {
		$query = "SELECT * FROM user_role ORDER BY name ASC";
		$result = mysql_query($query) or  trigger_error(mysql_error()." ".$query);
		
		return $result;
	}
	function deleteUserRole($id) {
		$query = "DELETE FROM user_role WHERE id='".id$."'";
		$result = mysql_query($query) or  trigger_error(mysql_error()." ".$query);
	}
	function updateUser ($id, $name) {
		$query = "UPDATE user_role SET name='""' WHERE id='".$id."'";
		$result = mysql_query($query) or trigger_error(mysql_error()." ".$query);
	}
    /***************************
    HELPER FUNCTIONS
    ****************************/
	
    //Converts the given date to YMD format
  	function convertDateFormat($date){
  		$date = date('Y-m-d', strtotime($date));
       	return preg_replace('/\s+/', '', $date);
    }
?>  