<!DOCTYPE html>
<html lang="tr-TR">

<?php include 'functions.php'; ?>
<?php include 'connectdb.php'; ?>
<?php
    session_start();
    
    if(!isset($_SESSION['firstname'])) { 
      header("location:index.php");}
?>
<?php 
    $searching = $_POST["kisi-ara"];
    $usersdb = searchUser($searching); 
	  $cnt=0;
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/ico/favicon.png">
    <title>Mezun Arama Sayfası - İzmir Üniversitesi Mezun Bilgi Sistemi</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/app.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    <style type="text/css">
        p img {
        	width: 50%;
        	margin: 0 25%;
        }
    </style>
</head>

<body>
  <div class="container">

    <!-- Static navbar -->
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="index.php">İZÜ Mezun Bilgi Sistemi</a> 
          </div>

        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mezunlar Derneği<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Mezunlar Derneği Hakkında</a></li>
                <li><a href="#">Yönetim Kurulu</a></li>
                <li><a href="#">Üyelik</a></li>
              </ul>
            </li>
          </ul>

        <?php 
            session_start();

            if(isset($_SESSION['firstname'])) { ?>

              <div>
                <form class="navbar-form navbar-left" role="search" action="find_friends.php" method="post" name="search" onsubmit="return validateForm()">
                  <div class="form-group" >
                    <input type="text" class="form-control" placeholder="Kişi Ara" id="kisi-ara" name ="kisi-ara">
                  </div>

                  <button type="submit" style="background:#337ab7; color:#ffffff; border-color:#337ab7; " class="btn btn-default">Ara <span class="glyphicon glyphicon-search"></span></button>
                </form>
              </div>

            <?php } ?>

            <ul class="nav navbar-nav navbar-right">
              <?php 
              session_start();

              if(isset($_SESSION['firstname'])) {
                $string = '<li><a href="#">'.$_SESSION['firstname'].' '.$_SESSION['lastname'].'</a></li>';
              }
              else {
                $string = '<li><a href="login.php">Giriş Yap</a></li>';
              }

              echo $string;
              ?>
            </ul>
         
            <ul class= "nav navbar-nav navbar-right">
              <?php 
            session_start();
              
              if(isset($_SESSION['firstname'])) { ?>
                  <li><a href="logout.php">Çıkış Yap</a></li>
              <?php } ?>
            </ul>
          </div>
        <!--/.nav-collapse --> 

      </div>
      <!--/.container-fluid --> 

    </nav>
    <!-- /.navbar -->
    
    <div class="jumbotron">
      <table class="table table-bordered table-hover">
        <tr>
          <th>Adı</th>
          <th>Soyadı</th>
          <th>E-Mail</th>
        </tr>

        <?php while($users= mysql_fetch_array($usersdb)): ?>

          <tr>
            <td><?php echo $users[0];  ?></td> <!-- Alumnus's Name -->
            <td><?php echo $users[1];  ?></td> <!-- Alumnus's Surname -->
            <td><?php echo $users[2];  ?></td> <!-- Alumnus's E-mail -->
          </tr>

        <?php $cnt++; endwhile; ?>
      </table>

      <center>
        <strong>
        <h4>

          <?php if($cnt==0) { 
            echo "Aradığınız Kriterlere Ait Bir Kullanıcı Bulunamamaktadır.";
          } ?> <!-- If there is no matched alumnus -->

        </h4>
        </strong>
      </center>
    </div>
    <!-- /.jumbotron -->

  </div>
  <!-- /container --> 

<!-- Bootstrap core JavaScript
    ================================================== --> 

<!-- Placed at the end of the document so the pages load faster --> 
<script src="assets/vendor/jquery/jquery-1.11.1.min.js"></script> 
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script> 

<!-- Custom.js --> 
<script src="assets/js/app.js"></script> 

<script>
  function validateForm() {
      var x = document.forms["search"]["kisi-ara"].value;
      if (x==null || x=="" || x==" " || x=='%' || x=="'" || x=="/" || x=="-" || x=="_" || x=="=") {
          alert("Lütfen geçerli bir karakter giriniz!");
          return false;
      }

  }

  var change = document.getElementById('kisi-ara');

  change.onblur = function() {
    change.value = change.value
        .replace(/\s+/igm, " ") //Birden fazla boşluk karakteri yan yana gelmişse tek boşluğa çevirir
        .replace(/^\s+|\s+$/g, ""); //Baştaki ve sondaki boşlukları temizler
  }
</script> 

<script>
$(document).ready(function () {
    $("#kisi-ara").keypress(function (evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            
            if (((charCode <= 93 && charCode >= 65) || (charCode <= 122 && charCode >= 97) || charCode == 8) || charCode == 350 || charCode == 351 || charCode == 304 || charCode == 286 || charCode == 287 || charCode == 231 || charCode == 199 || charCode == 305 || charCode == 214 || charCode == 246 || charCode == 220 || charCode == 252 || charCode == 32) {
               return true;
            }

            return false;
        });
 });
 </script> 
 
<script type="text/javascript">
    $('input[name="kisi-ara"]').bind('paste', function(){return false;})
    $('input[name="kisi-ara"]').bind('copy', function(){return false;})
</script>
</body>
</html>
