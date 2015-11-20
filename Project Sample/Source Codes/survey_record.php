<?php include 'functions.php'; ?>
<?php	include 'connectdb.php'; ?>
<?php
	session_start();
	// populate the answers table if Survey is answered
	
  if ( isset($_POST) ) {
		foreach ($_POST as $key => $value) {
			$sql = "INSERT INTO `survey_responses` (`choice_id`, `question_id`, `user_id`) VALUES ('".$value."','".$key."','".$_SESSION['id']."')";
			mysql_query($sql);
		}
	}
?>

<?php 
	  // read questions
	  $eid = $_GET["eid"];
    $questDB = getQuestionnaire($eid); 
    $val = mysql_num_rows($questDB);
?>

<!DOCTYPE html>
<html lang="tr">
<html lang="tr-TR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/ico/favicon.png">
    <title>Etkinlik Önerisi - İzmir Üniversitesi Mezun Bilgi Sistemi</title>

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
        
        <!-- If event has a question -->
        <?php if(isset($_SESSION['firstname']) && $val > 0) { 
                $i = 1; 
                $eData = getEvents($eid);         
                $rData = mysql_fetch_assoc($eData);
                  
                echo "<h1><center>".$rData['title']."</h1></center>";
                echo "<h3>".$rData['description'];
                  
                if($rData['place'] != "") {
                  echo "<br><br>Place: ".$rData['place'];
                  
                  if($rData['date'] != ""){
                    echo "<br>Date: ".$rData['date'];
                  }
                }
                
                echo "<br><br>Lütfen bu etkinlikle ilgili fikirlerinizi belirtiniz: </h3>";
        ?>
        <br>

        <?php			
      		while($row = mysql_fetch_assoc($questDB)) { ?>
            <p><?php echo $i.") ".$row['question']; ?></p> <!-- Survey's Question -->
            
            <ul>
              <?php 
                $listChoices = getChoices($row['id']);
        				
                while ($rowChoices = mysql_fetch_assoc($listChoices)) {?>
                  <li>
                    <?php 
              				$countersql1 = 'Select count(choice_id) from survey_responses where choice_id='.$rowChoices['id'];
              				$countersql = mysql_query($countersql1);

              				while($res = mysql_fetch_assoc($countersql)) {
              					$counter = $res['count(choice_id)'];
                        
                        echo $rowChoices['content'];
                        echo '&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:red;">'.$counter.' Oy<span>';
                      }
            				?>
                  </li>
              <?php } ?>
            </ul>
            <br>
            <br>
        
        <?php $i++; }?>
        
        <?php
      	} 
        elseif ($val == 0) {
      		echo "<h1><center>Bu etkinlik için bir anket oluşturulmamış!</center></h1>";
      	}
        else {
      	   echo "<h1><center>Sadece sisteme kayıtlı mezunlar ve öğrenciler anketi görüntüleyebilir!</center></h1>";
      	} ?>

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