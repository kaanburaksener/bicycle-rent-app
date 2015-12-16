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

    function getUser($email) {
      $query = "SELECT * FROM bicycle_outlet_user_info WHERE email = '".$email."'";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

      return $result;
    }

    //Updates an existed user on the database

    function updateUser($first_name, $last_name, $email, $bicycle_outlet_id, $user_role_id) {
      $query = "UPDATE bicycle_outlet_user_info SET first_name = '".$first_name."', last_name = '".$last_name."', email = '".$email."', bicycle_outlet_id = '".$bicycle_outlet_id."', user_role_id = '".$user_role_id."'  WHERE email ='".$email."'";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);
    }

    function removeUserRole($id) {
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

    function getShop($name, $address) {
      $query = "SELECT * FROM bicycle_outlet WHERE name = '".$name."' AND address = '".$address."'";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

      return $result;
    }

    function getShopById($id) {
      $query = "SELECT * FROM bicycle_outlet WHERE id = '".$id."'";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

      return $result;
    }

    function getShopStaffs($shop_id) {
      $query = "SELECT * FROM bicycle_outlet_user_info 
                INNER JOIN user_role ON bicycle_outlet_user_info.user_role_id = user_role.id 
                INNER JOIN bicycle_outlet ON bicycle_outlet_user_info.bicycle_outlet_id = bicycle_outlet.id 
                WHERE bicycle_outlet_id = '".$shop_id."' ORDER BY user_role.name ASC, bicycle_outlet_user_info.first_name ASC";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

      return $result;
    }

    //Updates an existed user on the database

    function updateShop($id, $name, $address) {
      $query = "UPDATE bicycle_outlet SET name = '".$name."', address = '".$address."' WHERE id ='".$id."'";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);
    }

  /***************************
  USER ROLE
  ****************************/

    function getRole($id) {
      $query = "SELECT * FROM user_role WHERE id = '".$id."'";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

      return $result;
    }
    
    function getRoles() {
      $query = "SELECT * FROM user_role";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

      return $result;
    }

  /***************************
  BICYCLE
  ****************************/

    function addNewBicycle($name, $brand_id, $type_id, $gear_number, $wheel_size, $rent_price_hour, $rent_discount_hour, $rent_discount_percent) {
      $query = "INSERT INTO bicycle_info (name, brand_id, type_id, gear_number, wheel_size, rent_price_hour, rent_discount_hour, rent_discount_percent) VALUES ('".$name."','".$brand_id."', '".$type_id."', '".$gear_number."', '".$wheel_size."', '".$rent_price_hour."', '".$rent_discount_hour."', '".$rent_discount_percent."')" ; 
      $result = mysql_query($query) or  trigger_error(mysql_error()." ".$query);
    }

    function deleteBicycle($id) {
      $query ="DELETE FROM bicycle_info WHERE id='".$id."'";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);
    }

    function getAvailableBicycles($shop_id) {
      $query = "SELECT * FROM bicycle_info 
                INNER JOIN bicycle_brand ON bicycle_info.brand_id = bicycle_brand.id 
                INNER JOIN bicycle_type ON bicycle_info.type_id = bicycle_type.id AND bicycle_info.id IN 
                (SELECT bicycle_id FROM bicycle_disposal WHERE bicycle_id NOT IN (SELECT bicycle_info_id FROM bicycle_rental_order) AND outlet_id = '".$shop_id."' 
                UNION
                SELECT bicycle_id FROM bicycle_disposal WHERE bicycle_id NOT IN (SELECT bicycle_id FROM bicycle_disposal INNER JOIN bicycle_rental_order ON bicycle_disposal.bicycle_id = bicycle_rental_order.bicycle_info_id AND bicycle_rental_order.returned_time IS NULL) AND bicycle_disposal.outlet_id = '".$shop_id."')";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

      return $result;
    }

    function getShopBicycles($shop_id) {
      $query = "SELECT * FROM bicycle_disposal 
                INNER JOIN bicycle_info ON bicycle_disposal.bicycle_id = bicycle_info.id 
                INNER JOIN bicycle_brand ON bicycle_info.brand_id = bicycle_brand.id 
                INNER JOIN bicycle_type ON bicycle_info.type_id = bicycle_type.id 
                WHERE bicycle_disposal.outlet_id = '".$shop_id."'";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

      return $result;
    }
    
    function getBicycle($id) {
      $query = "SELECT * FROM bicycle_info WHERE id = '".$id."'";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

      return $result;
    }

    function getLastAddedBicycle() {
      $query = "SELECT MAX(id) FROM bicycle_info";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

      return $result;
    }

    function getAllBicycleBrands() {
      $query = "SELECT * FROM bicycle_brand ORDER BY name ASC";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

      return $result;
    }

    function getAllBicycleTypes() {
      $query = "SELECT * FROM bicycle_type ORDER BY name ASC";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

      return $result;
    }

    function getAllBicycleBrandsByShop($shop_id) {
      $query = "SELECT DISTINCT bb.id, bb.name FROM bicycle_brand AS bb 
                INNER JOIN bicycle_info AS bi ON bi.brand_id = bb.id 
                INNER JOIN bicycle_rental_order AS bro ON bro.bicycle_info_id = bi.id 
                INNER JOIN bicycle_outlet_user_info AS boui ON bro.rented_bicycle_outlet_user_id = boui.id 
                INNER JOIN bicycle_outlet AS bo ON boui.bicycle_outlet_id = bo.id 
                WHERE bi.id IN (SELECT bicycle_info_id FROM bicycle_rental_order WHERE returned_time IS NOT NULL) AND bo.id = '".$shop_id."'
                ORDER BY name ASC";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

      return $result;
    }

    function getAllBicycleTypesByShop($shop_id) {
      $query = "SELECT DISTINCT bt.id, bt.name FROM bicycle_type AS bt 
                INNER JOIN bicycle_info AS bi ON bi.type_id = bt.id 
                INNER JOIN bicycle_rental_order AS bro ON bro.bicycle_info_id = bi.id 
                INNER JOIN bicycle_outlet_user_info AS boui ON bro.rented_bicycle_outlet_user_id = boui.id 
                INNER JOIN bicycle_outlet AS bo ON boui.bicycle_outlet_id = bo.id 
                WHERE bi.id IN (SELECT bicycle_info_id FROM bicycle_rental_order WHERE returned_time IS NOT NULL) AND bo.id = '".$shop_id."'
                ORDER BY name ASC";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

      return $result;
    }

    function updateBicycle($id, $name, $brand_id, $type_id, $gear_number, $wheel_size, $rent_price_hour, $rent_discount_hour, $rent_discount_percent) {
      $query = "UPDATE bicycle_info SET name='".$name."', brand_id='".$brand_id."', type_id='".$type_id."', gear_number='".$gear_number."', wheel_size='".$wheel_size."', rent_price_hour='".$rent_price_hour."', rent_discount_hour='".$rent_discount_hour."', rent_discount_percent='".$rent_discount_percent."'  WHERE id='".$id."'";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);
    }

    function getBicycleStatus($bicycle_id) {
      $query = "SELECT * FROM bicycle_rental_order WHERE bicycle_info_id = '".$bicycle_id."'";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

      return $result;
    }

  /***************************
  BICYCLE DISPOSAL
  ****************************/

    function addDisposal($outlet_id, $bicycle_id) {
      $query = "INSERT INTO bicycle_disposal (outlet_id, bicycle_id) VALUES ('".$outlet_id."', '".$bicycle_id."')" ; 
      $result = mysql_query($query) or  trigger_error(mysql_error()." ".$query);
    }

    function deleteDisposal($bicycle_id){
      $query ="DELETE FROM bicycle_disposal WHERE bicycle_id ='".$bicycle_id."'";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);
    }

  /***************************
  CUSTOMER
  ****************************/

  function addNewCustomer($first_name, $last_name, $address, $phone) {
    $query = "INSERT INTO outlet_customer (first_name, last_name, address, phone) VALUES ('".$first_name."', '".$last_name."', '".$address."', '".$phone."')"; 
    $result = mysql_query($query) or  trigger_error(mysql_error()." ".$query);
  }

  function getCustomer($phone) {
    $query = "SELECT * FROM outlet_customer WHERE phone = '".$phone."'";
    $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

    return $result;
  }

  function getLastRegisteredCustomer() {
      $query = "SELECT MAX(id) FROM outlet_customer";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

      return $result;
  }

  /***************************
  RENTAL ORDER
  ****************************/

  function addNewOrder($rented_bicycle_outlet_user_id, $outlet_customer_id, $bicycle_info_id) {
    $query = "INSERT INTO bicycle_rental_order (rented_bicycle_outlet_user_id, outlet_customer_id, bicycle_info_id) VALUES ('".$rented_bicycle_outlet_user_id."', '".$outlet_customer_id."', '".$bicycle_info_id."')"; 
    $result = mysql_query($query) or  trigger_error(mysql_error()." ".$query);
  }

  function getUnfinalizedOrders($outlet_id) {
    $query = "SELECT * FROM bicycle_rental_order 
              INNER JOIN bicycle_outlet_user_info ON bicycle_rental_order.rented_bicycle_outlet_user_id = bicycle_outlet_user_info.id 
              INNER JOIN outlet_customer ON bicycle_rental_order.outlet_customer_id = outlet_customer.id
              INNER JOIN bicycle_info ON bicycle_rental_order.bicycle_info_id = bicycle_info.id
              INNER JOIN bicycle_brand ON bicycle_info.brand_id = bicycle_brand.id 
              WHERE bicycle_rental_order.rented_bicycle_outlet_user_id IN (SELECT id FROM bicycle_outlet_user_info WHERE bicycle_outlet_id = '".$outlet_id."') AND bicycle_rental_order.returned_bicycle_outlet_user_id IS NULL";
    
    $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

    return $result;
  }

  function getOrder($id) {
    $query = "SELECT * FROM bicycle_rental_order WHERE id = '".$id."'";
    $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

    return $result;
  }

  function finalizeOrder($id, $returned_bicycle_outlet_user_id, $returned_time, $hour_discount, $sum_before_discount, $total_order_sum) {
    $query = "UPDATE bicycle_rental_order SET returned_bicycle_outlet_user_id='".$returned_bicycle_outlet_user_id."', returned_time='".$returned_time."', hour_discount='".$hour_discount."', sum_before_discount='".$sum_before_discount."', total_order_sum='".$total_order_sum."' WHERE id='".$id."'";    
    $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);
  }

  /***************************
  STATISTICS
  ****************************/

  /* Counting average time each bicycle brand is rented */
  function getAllRentedBicyclesAverageTimeByBrand() {
    $query = "SELECT bb.name, COUNT(bro.id) AS rent_times_number, ROUND(AVG(TIME_TO_SEC(TIMEDIFF(bro.returned_time, bro.rented_time))/(60*60))) AS average_rent_time FROM bicycle_rental_order AS bro 
              INNER JOIN bicycle_info AS bi ON bro.bicycle_info_id = bi.id
              INNER JOIN bicycle_brand AS bb ON bi.brand_id = bb.id
              GROUP BY bb.name
              ORDER BY rent_times_number, average_rent_time";
    
    $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

    return $result;
  }

  /* Counting average time each bicycle type is rented */
  function getAllRentedBicyclesAverageTimeByType() {
    $query = "SELECT bt.name, COUNT(bro.id) AS rent_times_number, ROUND(AVG(TIME_TO_SEC(TIMEDIFF(bro.returned_time, bro.rented_time))/(60*60))) AS average_rent_time FROM bicycle_rental_order AS bro 
              INNER JOIN bicycle_info AS bi ON bro.bicycle_info_id = bi.id
              INNER JOIN bicycle_type AS bt ON bi.type_id = bt.id
              GROUP BY bt.name
              ORDER BY rent_times_number, average_rent_time";
    
    $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

    return $result;
  }


  /* Counting average time each bicycle type of a given brand is rented */
  function getAllRentedBicyclesAverageTimeByBrandId($brand_id) {
    $query = "SELECT bb.name, COUNT(bro.id) AS rent_times_number, ROUND(AVG(TIME_TO_SEC(TIMEDIFF(bro.returned_time, bro.rented_time))/(60*60))) AS average_rent_time FROM bicycle_rental_order AS bro 
              INNER JOIN bicycle_info AS bi ON bro.bicycle_info_id = bi.id
              INNER JOIN bicycle_type AS bt ON bi.type_id = bt.id
              INNER JOIN bicycle_brand AS bb ON bi.brand_id = bb.id
              WHERE bb.id = '".$brand_id."'
              GROUP BY bt.name
              ORDER BY rent_times_number, average_rent_time";
    
    $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

    return $result;
  }

  /* Counting average time each bicycle brand of a given type is rented */
  function getAllRentedBicyclesAverageTimeByTypeId($type_id) {
    $query = "SELECT bt.name, COUNT(bro.id) AS rent_times_number, ROUND(AVG(TIME_TO_SEC(TIMEDIFF(bro.returned_time, bro.rented_time))/(60*60))) AS average_rent_time FROM bicycle_rental_order AS bro 
              INNER JOIN bicycle_info AS bi ON bro.bicycle_info_id = bi.id
              INNER JOIN bicycle_type AS bt ON bi.type_id = bt.id
              INNER JOIN bicycle_brand AS bb ON bi.brand_id = bb.id
              WHERE bt.id = '".$type_id."'
              GROUP BY bb.name
              ORDER BY rent_times_number, average_rent_time";
    
    $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

    return $result;
  }

  /* Counting rental stats for an outlet as a whole */
  function getAllRentalStatsByOutletId($outlet_id) {
    $query = "SELECT bo.name, COUNT(bro.id) AS finished_rent_times_number, SUM(total_order_sum) AS outlet_revenue FROM bicycle_rental_order AS bro
              INNER JOIN bicycle_outlet_user_info AS boui ON bro.rented_bicycle_outlet_user_id = boui.id
              INNER JOIN bicycle_outlet AS bo ON boui.bicycle_outlet_id = bo.id
              WHERE bro.returned_time IS NOT NULL AND bro.rented_bicycle_outlet_user_id IN (SELECT id FROM bicycle_outlet_user_info WHERE bicycle_outlet_id = '".$outlet_id."')
              GROUP BY bo.name
              ORDER BY finished_rent_times_number, outlet_revenue";
    
    $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

    return $result;
  }

  /* Query indicating the performance of workers (the number of finished rents done and the amount of money yielded from these rents) */
  function getAllStaffStats($outlet_id) {
    $query = "SELECT boui.id, boui.first_name, boui.last_name, COUNT(rented_time) AS rent_quantity, SUM(total_order_sum) AS revenue FROM bicycle_rental_order AS bro 
              INNER JOIN bicycle_outlet_user_info AS boui ON bro.rented_bicycle_outlet_user_id = boui.id 
              WHERE returned_time IS NOT NULL AND boui.bicycle_outlet_id = '".$outlet_id."'
              GROUP BY boui.id, boui.first_name, boui.last_name 
              ORDER BY revenue";
    
    $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

    return $result;
  }

  /***************************
  HELPER FUNCTIONS
  ****************************/

    //Converts the given date to DMY format
  	function convertDateFormat($date) {
  		$date = date('d-m-Y H:i:s', strtotime($date));
      
      return $date;
    }

    //Calculates the total rented hours
    function timeDifference($firstTime, $lastTime) {
      $hours = round((strtotime($lastTime) - strtotime($firstTime)) / (60 * 60));

      return $hours;
    }
?>  