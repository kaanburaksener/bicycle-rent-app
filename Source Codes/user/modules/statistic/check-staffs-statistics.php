<?php include '../../bodyguard.php'; ?>
<?php include '../../functions.php'; ?>
<?php include '../../connectdb.php'; ?>

<?php 

if (isset($_SESSION['email']) && isset($_SESSION['user_role'])) {
    $email = $_SESSION['email']; 
    $user_role = $_SESSION['user_role'];

    $user = getUser($email); 
    $user = mysql_fetch_array($user);

    $shop = getShopById($user["bicycle_outlet_id"]);
    $shop = mysql_fetch_array($shop);
    $shop_staffs_stats = getAllStaffStats($shop["id"]);
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Staff Statistics | Bicycle Rent App</title>

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
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1.1", {packages:["bar"]});
      google.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Staff', 'Revenue', 'Completed Orders'],
          
          <?php
    
            while($staff = mysql_fetch_assoc($shop_staffs_stats)) {
                $name = $staff['first_name'].' '.$staff['last_name'];
                $rent_quantity = $staff['rent_quantity'];
                $revenue = $staff['revenue'];
                echo "['$name', '$revenue', '$rent_quantity'],";
            }

          ?>
        ]);

        var options = {
          width: 900,
          bars: 'horizontal', // Required for Material Bar Charts.
          series: {
            0: { axis: 'revenue' }, // Bind series 0 to an axis named 'distance'.
            1: { axis: 'completed_orders' } // Bind series 1 to an axis named 'brightness'.
          },
          axes: {
            x: {
              completed_orders: {label: 'completed orders'}, // Bottom x-axis.
              revenue: {side: 'top', label: 'revenue (ruble)'} // Top x-axis.
            }
          }
        };

        var chart = new google.charts.Bar(document.getElementById('dual_x_div'));
        chart.draw(data, options);
      };
    </script>
  </head>

  <body>

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
                <a class="navbar-brand" href="../../dashboard.php"><i class="fa fa-bicycle fa-2x"></i> Dashboard</a>
            </div>

            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $user["first_name"]." ".$user["last_name"];?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="../../profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>

                        <li class="divider"></li>
                        
                        <li>
                            <a href="../../logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="../../dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>

                    <li>
                        <?php if ($user_role == 'Manager'): ?>
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#shops_for_manager"><i class="fa fa-shopping-bag"></i> Shop <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="shops_for_manager" class="collapse">
                                <li>
                                    <a href="../shop/my-shop.php"><i class="fa fa-fw fa-code-fork"></i> My Shop</a>
                                </li>

                                <li>
                                    <a href="../shop/shop.php">Go To Shop <i class="fa fa-chevron-right"></i></a>
                                </li>
                            </ul>
                        <?php elseif ($user_role == 'No Role'): ?>
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#shops_for_no_role"><i class="fa fa-shopping-bag"></i> Shop <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="shops_for_no_role" class="collapse">
                                <li>
                                    <a href="../shop/add-new-shop.php"><i class="fa fa-fw fa-plus"></i> New Shop</a>
                                </li>
                            </ul>
                        <?php else: ?>
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#shops_for_staff"><i class="fa fa-shopping-bag"></i> Shop <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="shops_for_staff" class="collapse">
                                <li>
                                    <a href="../shop/my-shop.php"><i class="fa fa-fw fa-code-fork"></i> My Shop</a>
                                </li>

                                <li>
                                    <a href="../shop/shop.php">Go To Shop <i class="fa fa-chevron-right"></i></a>
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
                        <?php if ($user_role == 'Manager'): ?>
                            <h1 class="page-header">
                                Statistics
                                <small>Staffs' Statistics</small>
                            </h1>
                        <?php elseif ($user_role == 'Staff'): ?>
                            <h1 class="page-header">
                                Statistics
                            </h1>
                        <?php endif; ?>
                       
                        <div class="col-lg-12 no-padding">
                            
                            <div id="dual_x_div" style="width: 700px; height: 400px;"></div>     
                            
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