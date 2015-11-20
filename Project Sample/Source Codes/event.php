<!DOCTYPE html>
<html lang="tr-TR">

<?php include 'functions.php'; ?>
<?php include 'connectdb.php'; ?>
<?php 
	$id = $_GET["id"];
    $eventsdb = getEvents($id); 
    $events= mysql_fetch_array($eventsdb);
?>

<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/ico/favicon.png">
	<title>Etkinlik Detayı - İzmir Üniversitesi Mezun Bilgi Sistemi</title>

	<!-- Bootstrap core CSS -->

	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->

	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

	<!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->

	<style type="text/css">
		#event_content {
			font-family: 'Open Sans', sans-serif;
		}

		.well {
			background-color: #FFFFFF;
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
	    <h2 style="font-size:40px;font-weight: bold">
	      <center>
	        <?php echo ($events[2]); ?> <!-- Event's Title -->
	      </center>
	    </h2>
	    <br>

	    <p id="event_content"><?php echo ($events[3]); ?></p> <!-- Event's Content -->
	    <br>

	    <div class="well">
	      <p><span class="glyphicon glyphicon-globe"></span><span> Yer:</span> <?php echo ($events[4]); ?></p> <!-- Event's Location -->
	      <p><span class="glyphicon glyphicon-calendar"></span><span> Zaman:</span> 
	        <?php @setlocale(LC_ALL, 'turkish'); 
	              echo iconv('latin5','utf-8',strftime('%e %B %Y'." / ". '%A'." - ".'%H:%M',strtotime($events[5]))); 
	        ?>
	      </p> <!-- Event's Time -->
	    </div>
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
</body>
</html>
