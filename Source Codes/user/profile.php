<?php include 'bodyguard.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Profile | Bicycle Rent App</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">

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
    
    if (isset($_SESSION['email'])) {
        $email = $_SESSION['email']; 
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>

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
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-table"></i> Projects <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="admin/modules/project/my-projects.php"><i class="fa fa-fw fa-code-fork"></i> My Projects</a>
                            </li>

                            <li>
                                <a href="admin/modules/project/add-project.php"><i class="fa fa-fw fa-plus"></i> New Project</a>
                            </li>
                        </ul>
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
                            Profile
                            <small><?php echo $user["first_name"]." ".$user["last_name"];?></small>
                        </h1>
                       
                        <div class="col-lg-6 no-padding">
                            <!-- Content Starts -->
                            <form role="form" action="modules/registration/update-user.php" method="post">

                                <!-- First Name -->
                                <div class="form-group">
                                    <label for="first-name">First Name</label>

                                    <input type="text" id="first-name" name="first-name" class="form-control" placeholder="First Name" value="<?php echo($user['first_name']);?>" required>
                                </div>

                                <!-- Last Name -->
                                <div class="form-group">
                                    <label for="last-name">Last Name</label>

                                    <input type="text" id="last-name" name="last-name" class="form-control" placeholder="Last Name" value="<?php echo($user['last_name']);?>" required>
                                </div>

                                <!-- Email -->
                                <div class="form-group">
                                    <label for="email">Email</label>

                                    <input readonly type="email" id="email" name="email" class="form-control" placeholder="Email Address" value="<?php echo($user['email']);?>" required>
                                </div>

                                <!-- Password -->
                                <div class="form-group">
                                    <label for="password">Password</label>

                                    <input readonly type="text" id="password" name="password" class="form-control" placeholder="Password" value="<?php echo($user['password']);?>" required>
                                </div>

                                <?php if ($user['bicycle_outlet_id'] != NULL): ?>
                                    
                                    <?php $shop = getShopById($user['bicycle_outlet_id']);?>
                                    <?php $shop = mysql_fetch_array($shop);?>

                                    <!-- Bicycle Outlet Name -->
                                    <div class="form-group">
                                        <label for="shop-name">Shop Name</label>

                                        <input readonly type="text" class="form-control" value="<?php echo($shop['name']);?>">
                                        
                                        <input type="hidden" id="bicycle-outlet-id" name="bicycle-outlet-id" class="form-control" value="<?php echo($shop['id']);?>">
                                    </div>
                                
                                    <?php $role = getRole($user['user_role_id']);?>
                                    <?php $role = mysql_fetch_array($role);?>

                                    <!-- Staff Role -->
                                    <div class="form-group">
                                        <label for="user-role">Role</label>

                                        <input readonly type="text" class="form-control" value="<?php echo($role['name']);?>">
                                        
                                        <input type="hidden" id="user-role-id" name="user-role-id" class="form-control" value="<?php echo($role['id']);?>">
                                    </div>
                                    
                                <?php endif ?>

                                <button type="submit" class="btn btn-custom-save">Update</button>
                            </form>
                          <!-- /form -->
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
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>