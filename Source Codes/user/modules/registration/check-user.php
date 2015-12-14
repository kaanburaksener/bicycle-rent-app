<?php

  include '../../functions.php';
  include '../../connectdb.php';

  $email_entered = $_POST["email"];
  $password_entered = $_POST["password"];

  $user = getUser($email_entered); 
  $user = mysql_fetch_array($user);

  //Get user data from the database
  $email = $user["email"];
  $password = $user["password"];
  $user_role_id = $user["user_role_id"];

  var_dump($email_entered, $email, $password_entered, $password);
  
  if (($email_entered == $email) AND ($password_entered == $password)) {
    //login successfull
    session_start();
    $_SESSION['email'] = $email;

    if ($user_role_id == NULL) {
      $_SESSION['user_role'] = "No Role";
    } else if($user_role_id == 1) {
      $_SESSION['user_role'] = "Manager";
    } else if ($user_role_id == 2) {
      $_SESSION['user_role'] = "Staff";  
    }
    
    header("Location: ../../dashboard.php");

  } else {
    //login fail
    header("Location: ../../login.php");
  }

?>