<?php include '../../bodyguard.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>My Shop | Bicycle Rent App</title>

    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../css/app.css" rel="stylesheet">
    <link href="../../css/dashboard.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <?php include '../../functions.php'; ?>
  <?php include '../../connectdb.php'; ?>

  <?php 
    
    if (isset($_SESSION['email']) && isset($_SESSION['user_role'])) {
        $email = $_SESSION['email']; 
        $user_role = $_SESSION['user_role'];

        $user = getUser($email); 
        $user = mysql_fetch_array($user);
    }

  ?>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

            <?php include '../../blocks/top-menu.php'; ?>
            <?php include '../../blocks/side-menu.php'; ?>

        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <?php if ($user_role == 'Manager'): ?>
                            <h1 class="page-header">
                                Shop
                                <small>managed by <?php echo $user["first_name"]." ".$user["last_name"];?></small>
                            </h1>
                        <?php elseif ($user_role == 'Staff'): ?>
                            <h1 class="page-header">
                                Shop
                            </h1>
                        <?php endif; ?>
                       
                        <div class="col-lg-12 no-padding">
                            
                            <?php 
                                $shop = getShopById($user["bicycle_outlet_id"]);
                                $shop = mysql_fetch_array($shop);
                            ?>

                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading1">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                                <?php echo $shop["name"];?>
                                            </a>
                                        </h4>
                                    </div>

                                    <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
                                        <div class="panel-body">

                                            <h4>Address <i class="fa fa-map-marker"></i></h4>
                                            <p><?php echo $shop["address"];?> </p>

                                            <hr>

                                            <h4>Staff <i class="fa fa-users"></i></h4>
                                            <ul id="staff-list" class="no-padding">
                                                <?php $shop_staffs = getShopStaffs($shop["id"]);?>
                                                <?php while($staff = mysql_fetch_array($shop_staffs)):?>

                                                    <li><strong><?php echo $staff["first_name"]." ".$staff["last_name"];?></strong>  <span class="role"><?php echo $staff[8];?></span></li>

                                                <?php endwhile;?>
                                            </ul>

                                            <hr>

                                            <a href="shop.php" class="btn btn-default btn-custom2">Go to shop</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../../js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>

  </body>
</html>