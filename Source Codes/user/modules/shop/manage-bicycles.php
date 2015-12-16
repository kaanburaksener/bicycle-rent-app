<?php include '../../bodyguard.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Manage Bicycles | Bicycle Rent App</title>

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
                            Manage  Bicycle
                            <small><?php echo $shop["name"];?></small>
                        </h1>

                        <div class="col-lg-12 no-padding">
                           
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading1">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                                Add New Bicycle <i class="fa fa-bicycle"></i> <i class="fa fa-plus fa-1x"></i>
                                            </a>
                                        </h4>
                                    </div>

                                    <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
                                        <div class="panel-body">

                                            <form role="form" action="add-new-bicycle.php" method="post">

                                                <div class="form-group">
                                                    <label for="name" class="sr-only">Name</label>
                                                    <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="brand-id">Bicycle Brand</label>

                                                    <select name="brand-id" class="form-control">

                                                    <?php $allBicycleBrands = getAllBicycleBrands();?>
                                                    <?php while($bicycleBrand = mysql_fetch_array($allBicycleBrands)):?>

                                                        <option value="<?php echo $bicycleBrand['id']; ?>"><?php echo $bicycleBrand['name']; ?></option>

                                                    <?php endwhile;?>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="type-id">Bicycle Type</label>

                                                    <select name="type-id" class="form-control">

                                                    <?php $allBicycleTypes = getAllBicycleTypes();?>
                                                    <?php while($bicycleType = mysql_fetch_array($allBicycleTypes)):?>

                                                        <option value="<?php echo $bicycleType['id']; ?>"><?php echo $bicycleType['name']; ?></option>

                                                    <?php endwhile;?>
                                                    </select>
                                                </div>

                                                <!-- Bicycle Gear Number -->
                                                <div class="form-group">
                                                    <label for="gear-number">Gear Number</label>

                                                    <select name="gear-number" class="form-control">
                                                        <option value="1">1</option>
                                                        <option value="3">3</option>
                                                        <option value="18">18</option>
                                                        <option value="21">21</option>
                                                        <option value="24">24</option>
                                                        <option value="27">27</option>        
                                                    </select>
                                                </div>

                                                <!-- Bicycle Wheel Size -->
                                                <div class="form-group">
                                                    <label for="wheel-size">Wheel Size</label>

                                                    <select name="wheel-size" class="form-control">
                                                        <option value="20">20 inch</option>
                                                        <option value="24">24 inch</option>
                                                        <option value="26">26 inch</option>
                                                        <option value="29">29 inch</option>       
                                                    </select>
                                                </div>
                                                
                                                <!-- Bicycle Name -->
                                                <div class="form-group">
                                                    <label for="rent-price-hour">Rental Price Hour</label>
                                                
                                                    <input type="text" class="form-control" id="rent-price-hour" name="rent-price-hour" placeholder="Enter Rental Price Hour...">
                                                </div>

                                                <!-- Bicycle Name -->
                                                <div class="form-group">
                                                    <label for="rent-discount-hour">Rental Discount Hour</label>
                                                
                                                    <input type="text" class="form-control" id="rent-discount-hour" name="rent-discount-hour" placeholder="Enter Rental discount hour...">
                                                </div>

                                                <!-- Bicycle Name -->
                                                <div class="form-group">
                                                    <label for="ent-discount-percent">Rental Discount Percent</label>
                                                
                                                    <input type="text" class="form-control" id="rent-discount-percent" name="rent-discount-percent" placeholder="Enter Rental discount percent...">
                                                </div>
                                               
                                                <input type="hidden" id="bicycle-outlet-id" name="bicycle-outlet-id" class="form-control" value="<?php echo($shop['id']);?>">

                                                <button type="submit" class="btn btn-custom4">Add Bicycle <i class="fa fa-bicycle"></i></button>
                                            </form>
                                          <!-- /form -->

                                        </div>
                                    </div>
                                </div>
                                <!-- /Add New Staff -->

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading2">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                                Display All Bicycles <i class="fa fa-bicycle"></i>
                                            </a>
                                        </h4>
                                    </div>

                                    <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                                        <div class="panel-body">
                                            
                                            <table class="table table-striped table-bordered table-hover">
                                                <thead> 
                                                    <tr> 
                                                        <th>Name</th>
                                                        <th>Brand</th> 
                                                        <th>Type</th> 
                                                        <th>Gear Number</th>
                                                        <th>Wheel Size</th>
                                                        <th>Rent Price Hour</th>
                                                        <th>Rent Discount Hour</th>
                                                        <th>Rent Discount Percent</th>
                                                    </tr> 
                                                </thead> 

                                                <tbody>

                                                    <?php $shop_bicycles = getShopBicycles($shop["id"]);?>
                                                    <?php while($bicycle = mysql_fetch_array($shop_bicycles)):?>

                                                        <tr>
                                                            <td width="35%"><?php echo $bicycle[3];//Name?></td>
                                                            <td width="19%"><?php echo $bicycle[12];//Brand?></td>
                                                            <td width="18%"><?php echo $bicycle[14];//Type?></td>
                                                            <td width="3%"><?php echo $bicycle[6];//Gear Number?></td>
                                                            <td width="3%"><?php echo $bicycle[7];//Wheel Size?></td>
                                                            <td width="3%"><?php echo $bicycle[8];//Rent Price Hour?></td>
                                                            <td width="3%"><?php echo $bicycle[9];//Rent Discount Hour?></td>
                                                            <td width="3%"><?php echo $bicycle[10];//Rent Discount Percent?></td>
                                                            <td width="11%"><a href="delete-bicycle.php?id=<?php echo $bicycle[2];?>" class="remove"> Remove <i class="fa fa-times"></i></a></td>
                                                        </tr>

                                                    <?php endwhile;?>

                                                </tbody> 
                                            </table>
                                            <!-- /table -->
                                           
                                        </div>
                                    </div>
                                </div>
                                <!-- /Display All Staff -->


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