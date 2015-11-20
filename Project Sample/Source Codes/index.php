<!DOCTYPE html>
<html lang="tr-TR">

<?php include 'functions.php'; ?>
<?php include 'connectdb.php'; ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/ico/favicon.png">
    <title>Ana Sayfa - İzmir Üniversitesi Mezun Bilgi Sistemi</title>

    <!-- Bootstrap core CSS -->

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link href="assets/css/app.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
    	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    	   ![endif]-->

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

  </div>
  <!--/.container-->

<div class="container">
  <div class="row row-offcanvas row-offcanvas-right">
    <div class="col-xs-12 col-sm-9">
      <p class="pull-right visible-xs">
        <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
      </p>

      <?php include "carousel.php";?> <!-- Slider is inside of this carousel.php -->
      
      <!-- /#carousel-example-captions -->
      
      <?php $allNews = getReadNews();?> <!-- Get all news -->

      <?php $i = 0; ?>

      <?php while($news= mysql_fetch_array($allNews)):?>

        <?php if($i%3==0) { ?> <!-- This control for grid design -->
          <div class="row">
        <?php } ?>

            <div class="col-xs-6 col-lg-4">
              <h3><?php echo $news[2];?></h3> <!-- New's Title -->
              <p> <?php echo(summary($news[3],40)); echo "...";  ?> </p> <!-- New's Summary -->
              <p><a class="btn btn-primary" href="new.php?id=<?php echo $news[0]; ?>" role="button"> Haberin Detayı &raquo;</a></p>
            </div>
            <!--/.col-xs-6.col-lg-4-->
            
        <?php if($i%3==2) { ?>
          </div>
          <!--/.row-->      
        <?php } ?>

        <?php $i++; ?>
      <?php endwhile; ?>
    </div>
    <!--/.col-xs-12.col-sm-9-->
    
    <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
      <?php 
  			session_start();

  			if(isset($_SESSION['firstname'])) { ?>
          <div class="list-group"> 
            <a href="#" class="list-group-item active" style="text-align:center;font-size: 18px">Anketler <span class="glyphicon glyphicon-list-alt"></span></a>
            
            <?php $allQuestionnaire = getAllQuestionnaire();?> <!-- Get all questionnaires -->
            
            <?php while($Questionnaire= mysql_fetch_array($allQuestionnaire)):?>
              <a href="survey.php?eid=<?php echo $Questionnaire['id']; ?>" class="list-group-item"> <?php echo $Questionnaire['title']; ?> Anketi</a>
            <?php endwhile; ?>
          </div>
        <?php } ?>

        <div class="list-group" id="upcoming-events"> <a href="#" class="list-group-item active">
          <h4 class="list-group-item-heading" style="text-align: center;">Yaklaşan Etkinlikler <span class="glyphicon glyphicon-calendar"></span></h4>
          
          <?php $allEvent = getAllEvent();?>
          
          <?php while($event= mysql_fetch_array($allEvent)):?> <!-- Get all events -->
          
          <a href="event.php?id=<?php echo $event['id']; ?>" class="list-group-item">
            <h4 class="list-group-item-heading"><?php echo $event['title']; ?></h4> <!-- Event's Title -->

            <p class="list-group-item-text"><?php echo (summary($event['description'],30)); ?></p> <!-- Event's Content -->
            <br>

            <p class="list-group-item-text" style="font-style: italic">
              <?php @setlocale(LC_ALL, 'turkish'); 

    			   echo iconv('latin5','utf-8',strftime('%e %B %Y %A',strtotime($event['date']))); ?>
            </p> <!-- Event's Date -->
          </a>
          <?php endwhile; ?>
        </div>
    </div>
    <!--/.sidebar-offcanvas--> 
    
  </div>
  <!--/row-->
  
  <hr>

  <footer>
    <center>
      <p>&copy; İzmir Üniversitesi Mezun Bilgi Sistemi 2014</p>
    </center>
  </footer>
</div>
<!--/.container--> 

<!-- Bootstrap core JavaScript
	================================================== --> 

<!-- Placed at the end of the document so the pages load faster --> 
<script src="assets/vendor/jquery/jquery-1.11.1.min.js"></script> 
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script> 

<!-- Custom.js --> 
<script src="assets/js/app.js"></script> 

<script type="text/javascript">
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

<script type="text/javascript">
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