<?php include '../../bodyguard.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Manage Staffs | Bicycle Rent App</title>

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
                            Manage Staff
                            <small><?php echo $shop["name"];?></small>
                        </h1>

                        <div class="col-lg-12 no-padding">
                           
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading1">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                                Add New Staff <i class="fa fa-user-plus fa-1x"></i>
                                            </a>
                                        </h4>
                                    </div>

                                    <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
                                        <div class="panel-body">

                                            <form role="form" action="add-new-staff.php" method="post">

                                                <div class="form-group">
                                                    <label for="first-name" class="sr-only">First Name</label>
                                                    <input type="text" id="first-name" name="first-name" class="form-control" placeholder="First Name" required>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="last-name" class="sr-only">Last Name</label>
                                                    <input type="text" id="last-name" name="last-name" class="form-control" placeholder="Last Name" required>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="email" class="sr-only">Email address</label>
                                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email Address" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="password" class="sr-only">Password</label>
                                                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="user-role-id">Role</label>

                                                    <select id="user-role-id" name="user-role-id" class="form-control">
                                                        <?php $roles = getRoles();?>
                                                        <?php while ($role = mysql_fetch_array($roles)): ?>

                                                            <option value="<?php echo $role["id"];?>"><?php echo $role["name"];?></option>
                                                        
                                                        <?php endwhile;?>
                                                    </select>
                                                </div>
                                               
                                                <input type="hidden" id="bicycle-outlet-id" name="bicycle-outlet-id" class="form-control" value="<?php echo($shop['id']);?>">

                                                <button type="submit" class="btn btn-custom4">Add Staff <i class="fa fa-user-plus fa-1x"></i></button>
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
                                                Display All Staffs <i class="fa fa-users"></i>
                                            </a>
                                        </h4>
                                    </div>

                                    <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                                        <div class="panel-body">
                                            
                                            <table class="table table-striped table-bordered table-hover">
                                                <thead> 
                                                    <tr> 
                                                        <th>Name and Surname</th> 
                                                        <th>Email</th> 
                                                        <th>Role</th> 
                                                    </tr> 
                                                </thead> 

                                                <tbody>

                                                    <?php $shop_staffs = getShopStaffs($shop["id"]);?>
                                                    <?php while($staff = mysql_fetch_array($shop_staffs)):?>
                                                        
                                                        <tr> 
                                                            <td><?php echo $staff["first_name"]." ".$staff["last_name"];?></td> 
                                                            <td><?php echo $staff["email"];?></td> 
                                                            <td><?php echo $staff[8];//Staff Role?></td>
                                                            <td style="width:91px"><a href="delete-staff.php?id=<?php echo $staff[0]; ?>" class="remove"> Remove <i class="fa fa-times"></i></a></td>
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