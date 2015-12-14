<?php include '../../bodyguard.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Shop | Bicycle Rent App</title>

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

                <?php 
                    $shop = getShopById($user["bicycle_outlet_id"]);
                    $shop = mysql_fetch_array($shop);
                ?>

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <?php if ($user_role == 'Manager'): ?>
                            <h1 class="page-header">
                                Shop
                                <small><?php echo $shop["name"];?></small>
                            </h1>
                        <?php elseif ($user_role == 'Staff'): ?>
                            <h1 class="page-header">
                                Shop
                            </h1>
                        <?php endif; ?>
                       
                        <div class="col-lg-12 no-padding">
                            
                            <div class="row" id="shop-functionalities">
                            
                            <?php if ($user_role == 'Manager'): ?>

                                <div class="col-sm-2 no-padding">
                                    <div id="edit-shop" class="func-button">
                                        <a href="edit-shop.php"><i class="fa fa-pencil fa-3x"></i> <br> Edit Shop</a>
                                    </div>
                                </div>

                                <div class="col-sm-2 no-padding">
                                    <div id="manage-staffs" class="func-button">
                                        <a href="manage-staffs.php"><i class="fa fa-user-plus fa-3x"></i> <br> Manage Staffs</a>    
                                    </div>
                                </div>

                                <div class="col-sm-2 no-padding">
                                    <div id="statistics" class="func-button">
                                        <a href="statistics.php"><i class="fa fa-pie-chart fa-3x"></i> <br> Statistics</a>    
                                    </div>
                                </div>

                            <?php endif; ?>

                                <div class="col-sm-2 no-padding">
                                    <div id="create-order" class="func-button">
                                        <a href="add-new-order.php"><i class="fa fa-plus fa-3x"></i> <br> Create Order</a>    
                                    </div>
                                </div>

                                <div class="col-sm-2 no-padding">
                                    <div id="new-bicycle" class="func-button">
                                        <a href="manage-bicycles.php"><i class="fa fa-bicycle fa-3x"></i> <br> Manage Bicycles</a>    
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