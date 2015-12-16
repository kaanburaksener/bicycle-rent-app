<?php include '../../bodyguard.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Finalize Order| Bicycle Rent App</title>

    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../css/app.css" rel="stylesheet">
    <link href="../../css/dashboard.css" rel="stylesheet">

    <!-- Date Time Picker -->
    <link href="../../css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

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

        $order_id = $_GET["id"];
        $order = getOrder($order_id);
        $order = mysql_fetch_array($order);
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
                        <h1 class="page-header">
                            Order
                            <small>will be finalized by <?php echo $user["first_name"]." ".$user["last_name"];?></small>
                        </h1>
                       
                        <div class="col-lg-6 no-padding">
                            <!-- Content Starts -->
                            <form role="form" action="save-finalized-order.php" method="post">

                                <!-- Returned Time -->
                                <div class="form-group">
                                    <label for="returned-time">Returned Time</label>

                                    <div class="input-group date form_datetime col-md-6" data-date-format="yyyy mm dd - HH:ii:ss p" data-link-field="input_datetime_1">
                                        <input type="text" class="form-control" size="16" value="">
                                        <span class="input-group-addon"><i class="fa fa-times"></i></span>
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    </div>

                                    <input type="hidden" id="input_datetime_1" name="returned-time" value="" required/><br/>
                                </div>

                                <input type="hidden" id="returned-bicycle-outlet-user-id" name="returned-bicycle-outlet-user-id" class="form-control" value="<?php echo($user['id']);?>">

                                <input type="hidden" id="order-id" name="order-id" class="form-control" value="<?php echo($order['id']);?>">

                                <input type="hidden" id="rented-time" name="rented-time" class="form-control" value="<?php echo($order['rented_time']);?>">

                                <input type="hidden" id="bicycle-info-id" name="bicycle-info-id" class="form-control" value="<?php echo($order['bicycle_info_id']);?>">

                                <button type="submit" class="btn btn-custom4">Finalize <i class="fa fa-check"></i></button>
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
    <script src="../../js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>

    <!-- Date Time Picker -->
    <script src="../../js/bootstrap-datetimepicker.min.js"></script>
    
    <script type="text/javascript">
        $(".form_datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii:ss'});
    </script>
  </body>
</html>