<?php include '../../bodyguard.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Edit Shop| Bicycle Rent App</title>

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
                        <h1 class="page-header">
                            Edit Shop
                            <small><?php echo $shop["name"];?></small>
                        </h1>
                       
                        <div class="col-lg-6 no-padding">
                            <!-- Content Starts -->
                            <form role="form" action="update-shop.php" method="post">

                                <!-- Name -->
                                <div class="form-group">
                                    <label for="name">Name</label>

                                    <input type="text" id="name" name="name" class="form-control" placeholder="Name of your shop..." value="<?php echo($shop['name']);?>" required>
                                </div>

                                <!-- Address -->
                                <div class="form-group">
                                    <label for="address">Address</label>

                                    <textarea id="address" name="address" class="form-control" rows="3" placeholder="Address of your shop..."><?php echo($shop['address']);?></textarea>
                                </div>

                                <input type="hidden" id="id" name="id" class="form-control" value="<?php echo($shop['id']);?>">

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
    <script src="../../js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>

  </body>
</html>