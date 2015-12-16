<?php include 'bodyguard.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Dashboard | Bicycle Rent App</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/app.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <?php include 'functions.php'; ?>
  <?php include 'connectdb.php'; ?>

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
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php"><i class="fa fa-bicycle fa-2x"></i> Dashboard</a>
            </div>

            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $user["first_name"]." ".$user["last_name"];?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>

                        <li class="divider"></li>
                        
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>

                    <li>
                        <?php if ($user_role == 'Manager'): ?>
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#shops_for_manager"><i class="fa fa-shopping-bag"></i> Shop <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="shops_for_manager" class="collapse">
                                <li>
                                    <a href="modules/shop/my-shop.php"><i class="fa fa-fw fa-code-fork"></i> My Shop</a>
                                </li>

                                <li>
                                    <a href="modules/shop/shop.php"><i class="fa fa-chevron-right"></i> Go To Shop</a>
                                </li>
                            </ul>
                        <?php elseif ($user_role == 'No Role'): ?>
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#shops_for_no_role"><i class="fa fa-fw fa-table"></i> Shops <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="shops_for_no_role" class="collapse">
                                <li>
                                    <a href="modules/shop/add-new-shop.php"><i class="fa fa-fw fa-plus"></i> New Shop</a>
                                </li>
                            </ul>
                        <?php else: ?>
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#shops_for_staff"><i class="fa fa-fw fa-table"></i> Shops <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="shops_for_staff" class="collapse">
                                <li>
                                    <a href="modules/shop/my-shop.php"><i class="fa fa-fw fa-code-fork"></i> My Shop</a>
                                </li>

                                <li>
                                    <a href="modules/shop/shop.php"><i class="fa fa-chevron-right"></i> Go To Shop</a>
                                </li>
                            </ul>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to Dashboard!
                        </h1>
                       
                        <!-- Content Starts -->
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
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>