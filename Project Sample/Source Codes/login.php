<?php
include 'functions.php';
include 'connectdb.php';

session_start();

$mesaj = '';

if (isset($_POST['submit'])) {

    if (empty($_POST['email']) OR empty($_POST['password'])) {
        $mesaj = 'Kullanici adi ve/veya sifre bos birakilamaz.';
    }
    else {
        $email = mysql_real_escape_string($_POST['email']);
        $password = mysql_real_escape_string($_POST['password']);
        $strSQL = "SELECT * FROM users WHERE email ='".$email."' AND password = '".$password."'";
        $results = mysql_query($strSQL);
        $num_rows = mysql_num_rows($results);
    	  $read = mysql_fetch_assoc($results);

    if($num_rows==1) {
      $_SESSION['id'] = $read['id'];
      $_SESSION['firstname'] = $read['firstname'];
      $_SESSION['lastname'] = $read['lastname'];
      $_SESSION['email'] = $read['email'];
      $_SESSION['user_role'] = $read['user_role'];
      
      $mesaj = "Kullanici onaylandi";

      if ($_SESSION['user_role']==0 || $_SESSION['user_role']==1) {
        header('location: admin/index.php');
      } 
      else {
        header('location: index.php');  
      } 
    }
    else {
      $mesaj = 'Kullanici adiniz ve/veya sifreniz hatali.';
    }
  }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/ico/favicon.png">
    <title>Giriş Paneli - İzmir Üniversitesi Mezun Bilgi Sistemi</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/login.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<body>
  <div class="container">
    <form class="form-signin " action="login.php" method="post" role="form">
      <h2 class="form-signin-heading" style="text-align:center">İzmir Üniversitesi Mezun Bilgi Sistemi</h2>
      <h2 class="form-signin-heading" style="text-align:center">Giriş Paneli</h2>
      <br>

      <?php if ( ! empty($mesaj) ): ?>
        <div class="alert alert-danger">
          <button class="close" data-close="alert"></button>
          <span><?php echo $mesaj; ?></span> 
        </div>
      <?php endif; ?>

      <label for="inputEmail" class="sr-only">Email Adresi</label>
      <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email Adresi" required>

      <label for="inputPassword" class="sr-only">Şifre</label>
      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Şifre" required>
      
      <button class="btn btn-lg btn-primary btn-block" name="submit" value="submit" type="submit">Giriş Yap</button>
    </form>
  </div>
  <!-- /container -->
</body>
</html>
