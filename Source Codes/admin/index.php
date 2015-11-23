<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard - Bicycle Rent App</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/admin-dashboard.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<?php include 'functions.php'; ?>
<?php include 'connectdb.php'; ?>

<body>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Bicycle Rent App | Admin Dashboard v1.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        
                        <li class="divider"></li>
                        
                        <li>
                            <a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-minus fa-fw"></i> Bicycles<span class="fa arrow"></span></a>
                            
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="modules/bicycle/bicycle.php"><i class="fa fa-list"></i> View All Bicycles</a>
                                </li>
                                <li>
                                    <a href="modules/bicycle/add-bicycle.php"><i class="fa fa-plus"></i> Add a New Bicycle</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-minus fa-fw"></i> Bicycle Brands<span class="fa arrow"></span></a>
                            
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="modules/bicycle-brand/bicycle-brand.php"><i class="fa fa-list"></i> View All Bicycle Brands</a>
                                </li>
                                <li>
                                    <a href="modules/bicycle-brand/add-bicycle-brand.php"><i class="fa fa-plus"></i> Add a New Bicycle Brand</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-minus fa-fw"></i> Bicycle Outlets<span class="fa arrow"></span></a>
                            
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="modules/bicycle-outlet/bicycle-outlet.php"><i class="fa fa-list"></i> View All Bicycle Outlets</a>
                                </li>
                                <li>
                                    <a href="modules/bicycle-outlet/add-bicycle-outlet.php"><i class="fa fa-plus"></i> Add a New Bicycle Outlet</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-minus fa-fw"></i> Bicycle Types<span class="fa arrow"></span></a>
                            
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="modules/bicycle-type/bicycle-type.php"><i class="fa fa-list"></i> View All Bicycle Types</a>
                                </li>
                                <li>
                                    <a href="modules/bicycle-type/add-bicycle-type.php"><i class="fa fa-plus"></i> Add a New Bicycle Type</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <?php $numberOfBicycleOutlets = getNumberOfBicycleOutlets();?>
            <?php $numberOfBicycleOutlets = mysql_fetch_array($numberOfBicycleOutlets);?>

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-map-marker fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo($numberOfBicycleOutlets[0]);?></div>
                                    <div>Bicycle Outlets</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php $numberOfBicycles = getNumberOfBicycles();?>
                <?php $numberOfBicycles = mysql_fetch_array($numberOfBicycles);?>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-bicycle fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo($numberOfBicycles[0]);?></div>
                                    <div>Bicycles</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php $numberOfBicycleBrands = getNumberOfBicycleBrands();?>
                <?php $numberOfBicycleBrands = mysql_fetch_array($numberOfBicycleBrands);?>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tags fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo($numberOfBicycleBrands[0]);?></div>
                                    <div>Bicycle Brands</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php $numberOfBicycleTypes = getNumberOfBicycleTypes();?>
                <?php $numberOfBicycleTypes = mysql_fetch_array($numberOfBicycleTypes);?>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-sitemap fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo($numberOfBicycleTypes[0]);?></div>
                                    <div>Bicycle Type</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/admin-dashboard.js"></script>
</body>
</html>