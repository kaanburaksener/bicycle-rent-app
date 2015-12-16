<?php include '../../bodyguard.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Manage Orders | Bicycle Rent App</title>

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
                            Manage Orders
                        </h1>

                        <div class="col-lg-12 no-padding">
                           
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading1">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                                Create Order with New Customer <i class="fa fa-user-plus"></i>
                                            </a>
                                        </h4>
                                    </div>

                                    <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
                                        <div class="panel-body">

                                            <form role="form" action="save-order-new-customer.php" method="post">

                                                <div class="form-group">
                                                    <label for="first-name">First Name</label>
                                                    <input type="text" id="first-name" name="first-name" class="form-control" placeholder="First Name" required>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="last-name">Last Name</label>
                                                    <input type="text" id="last-name" name="last-name" class="form-control" placeholder="Last Name" required>
                                                </div>
                                                
                                                <!-- Address -->
                                                <div class="form-group">
                                                    <label for="address">Address</label>

                                                    <textarea id="address" name="address" class="form-control" rows="3" placeholder="Address"></textarea>
                                                </div>
                                                
                                                <!-- Phone -->
                                                <div class="form-group">
                                                    <label for="phone">Phone</label>
                                                    <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone" required>
                                                </div>

                                                <input type="hidden" id="rented-outlet-staff-id" name="rented-outlet-staff-id" value="<?php echo $user["id"];?>">

                                                <div class="form-group">
                                                    <label for="bicycle-id">Bicycle</label>

                                                    <select name="bicycle-id" class="form-control">

                                                    <?php $available_bicycles = getAvailableBicycles($shop["id"]);?>
                                                    <?php while($bicycle = mysql_fetch_array($available_bicycles)):?>
                                                        
                                                        <option value="<?php echo $bicycle[0];?>"><?php echo $bicycle[10].' / '.$bicycle[1];?></option>

                                                    <?php endwhile;?>

                                                    </select>
                                                </div>

                                                <button type="submit" class="btn btn-custom4">Create Order <i class="fa fa-plus fa-1x"></i></button>
                                            </form>
                                          <!-- /form -->

                                        </div>
                                    </div>
                                </div>
                                <!-- /New Customer -->

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading2">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                                Create Order with Registered Customer <i class="fa fa-user"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    
                                    <?php if(isset($_GET['phone'])): ?>
                                        
                                        <div id="collapse2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading2">
                                            <div class="panel-body">

                                    <?php else:?>

                                        <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                                            <div class="panel-body">

                                    <?php endif;?>

                                            <?php if(isset($_GET['phone'])): ?>

                                                <?php $phone = $_GET['phone'];?>
                                                <?php $customer = getCustomer($phone);?>
                                                <?php $customer = mysql_fetch_array($customer);?>
                                            
                                                <form role="form" action="save-order-registered-customer.php" method="post">

                                                    <div class="form-group">
                                                        <label for="first-name">First Name</label>
                                                        <input readonly type="text" id="first-name" name="first-name" class="form-control" placeholder="First Name" value="<?php echo $customer["first_name"];?>" required>
                                                    </div>
                                            
                                                    <div class="form-group">
                                                        <label for="last-name">Last Name</label>
                                                        <input readonly type="text" id="last-name" name="last-name" class="form-control" placeholder="Last Name" value="<?php echo $customer["last_name"];?>" required>
                                                    </div>
                                                    
                                                    <!-- Address -->
                                                    <div class="form-group">
                                                        <label for="address">Address</label>

                                                        <textarea readonly id="address" name="address" class="form-control" rows="3" placeholder="Address"><?php echo $customer["address"];?></textarea>
                                                    </div>
                                                    
                                                    <!-- Phone -->
                                                    <div class="form-group">
                                                        <label for="phone">Phone</label>
                                                        <input readonly type="text" id="phone" name="phone" class="form-control" placeholder="Phone" value="<?php echo $customer["phone"];?>" required>
                                                    </div>

                                                    <input type="hidden" id="outlet-customer-id" name="outlet-customer-id" value="<?php echo $customer["id"];?>">

                                                    <input type="hidden" id="rented-outlet-staff-id" name="rented-outlet-staff-id" value="<?php echo $user["id"];?>">

                                                    <div class="form-group">
                                                        <label for="bicycle-id">Bicycle</label>

                                                        <select name="bicycle-id" class="form-control">

                                                        <?php $available_bicycles = getAvailableBicycles($shop["id"]);?>
                                                        <?php while($bicycle = mysql_fetch_array($available_bicycles)):?>
                                                            
                                                            <option value="<?php echo $bicycle[0];?>"><?php echo $bicycle[10].' / '.$bicycle[1];?></option>

                                                        <?php endwhile;?>

                                                        </select>
                                                    </div>

                                                    <button type="submit" class="btn btn-custom4">Create Order <i class="fa fa-plus fa-1x"></i></button>
                                                </form>
                                              <!-- /form -->

                                            <?php else:?>

                                                <form action="add-new-order.php">

                                                    <div class="form-group input-group">
                                                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Please enter the phone number of the customer...">
                                                        <span class="input-group-btn"><button class="btn btn-default" style="border: 1px solid #ccc!important;" type="button"><i class="fa fa-search"></i></button></span>
                                                    </div>
                                                
                                                </form>

                                            <?php endif;?>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Registered Customer -->

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading3">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                                Unfinalized Orders <i class="fa fa-list"></i></i>
                                            </a>
                                        </h4>
                                    </div>

                                    <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                        <div class="panel-body">

                                            <table class="table table-striped table-bordered table-hover">
                                                <thead> 
                                                    <tr> 
                                                        <th>Staff (Rented)</th>
                                                        <th>Customer</th> 
                                                        <th>Bicycle</th> 
                                                        <th>Rented Time</th>
                                                        <th>Status</th>
                                                    </tr> 
                                                </thead> 

                                                <tbody>

                                                    <?php $orders = getUnfinalizedOrders($shop["id"]);?>
                                                    <?php while($order = mysql_fetch_array($orders)):?>

                                                        <tr>
                                                            <td><?php echo $order[11]." ".$order[12];?></td>
                                                            <td><?php echo $order["first_name"]." ".$order["last_name"];?></td>
                                                            <td><?php echo $order["name"]." - ".$order[23];?></td>
                                                            <td><?php echo convertDateFormat($order["rented_time"]);?></td>
                                                            <td width="95px"><a href="finalize-order.php?id=<?php echo $order[0];?>" class="finalize"> Finalize <i class="fa fa-check"></i></a></td>
                                                        </tr>

                                                    <?php endwhile;?>

                                                </tbody> 
                                            </table>
                                            <!-- /table -->

                                        </div>
                                    </div>
                                </div>
                                <!-- /New Customer -->

                            </div>
                            <!-- /#accordion -->
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