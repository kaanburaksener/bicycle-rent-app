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
    USER REGISTRATION
    ****************************/

    //Adds a new user to the database

    function addNewUser($first_name, $last_name, $email, $password) {
      $query = "INSERT INTO bicycle_outlet_user_info (first_name, last_name, email, password) VALUES ('".$first_name."', '".$last_name."', '".$email."', '".$password."')"; 
      $result = mysql_query($query) or  trigger_error(mysql_error()." ".$query);
    }

    function addNewStaff($first_name, $last_name, $email, $password, $bicycle_outlet_id, $user_role_id) {
      $query = "INSERT INTO bicycle_outlet_user_info (first_name, last_name, email, password, bicycle_outlet_id, user_role_id) VALUES ('".$first_name."', '".$last_name."', '".$email."', '".$password."', '".$bicycle_outlet_id."', '".$user_role_id."')"; 
      $result = mysql_query($query) or  trigger_error(mysql_error()." ".$query);
    }

    //Gets a specific user from the database

    function getUser($email){
      $query = "SELECT * FROM bicycle_outlet_user_info WHERE email = '".$email."'";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

      return $result;
    }

    //Updates an existed user on the database

    function updateUser($first_name, $last_name, $email, $bicycle_outlet_id, $user_role_id){
      $query = "UPDATE bicycle_outlet_user_info SET first_name = '".$first_name."', last_name = '".$last_name."', email = '".$email."', bicycle_outlet_id = '".$bicycle_outlet_id."', user_role_id = '".$user_role_id."'  WHERE email ='".$email."'";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);
    }

    function removeUserRole($id){
      $query = "UPDATE bicycle_outlet_user_info SET bicycle_outlet_id = NULL, user_role_id = NULL WHERE id ='".$id."'";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);
    }

  /***************************
    SHOP CREATION
    ****************************/

    //Adds a new shop to the database

    function addNewShop($name, $address) {
      $query = "INSERT INTO bicycle_outlet (name, address) VALUES ('".$name."', '".$address."')"; 
      $result = mysql_query($query) or  trigger_error(mysql_error()." ".$query);
    }

    //Gets a specific shop from the database

    function getShop($name, $address){
      $query = "SELECT * FROM bicycle_outlet WHERE name = '".$name."' AND address = '".$address."'";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

      return $result;
    }

    function getShopById($id){
      $query = "SELECT * FROM bicycle_outlet WHERE id = '".$id."'";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

      return $result;
    }

    function getShopStaffs($shop_id) {
      $query = "SELECT bicycle_outlet_user_info.*, user_role.*, bicycle_outlet.* FROM bicycle_outlet_user_info INNER JOIN user_role ON bicycle_outlet_user_info.user_role_id = user_role.id INNER JOIN bicycle_outlet ON bicycle_outlet_user_info.bicycle_outlet_id = bicycle_outlet.id AND bicycle_outlet_id = '".$shop_id."' ORDER BY user_role.name ASC, bicycle_outlet_user_info.first_name ASC";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

      return $result;
    }

    //Updates an existed user on the database

    function updateShop($id, $name, $address){
      $query = "UPDATE bicycle_outlet SET name = '".$name."', address = '".$address."' WHERE id ='".$id."'";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);
    }

    /***************************
    USER ROLE
    ****************************/

    function getRole($id){
      $query = "SELECT * FROM user_role WHERE id = '".$id."'";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

      return $result;
    }
    
    function getRoles(){
      $query = "SELECT * FROM user_role";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

      return $result;
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