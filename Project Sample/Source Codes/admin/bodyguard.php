<?php
session_start();
if($_SESSION['user_role']==2 || $_SESSION['user_role']==3 || $_SESSION['user_role']==null )  header('location: ../login.php');
?>