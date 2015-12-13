<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    
    <title>Bicycles | Bicycle Rent App</title>

    <!-- Bootstrap -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../css/jumbotron-narrow.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../css/app.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<?php include '../../functions.php'; ?>
<?php include '../../connectdb.php'; ?>

<body>

    <?php include '../../blocks/main-menu.php'; ?>

    <div class="container">
        <div class="jumbotron">
            <h2>Bicycles</h2>
            
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Bicycle ID</th>
                        <th>Bicycle Name</th>
                        <th>Brand Name</th>
                        <th>Bicycle Type</th>
                        <th>Gear Number</th>
                        <th>Wheel Size</th>
                        <th>Rental Price Hour</th>
                        <th>Rental Discount Hour</th>
                        <th>Rental Discount Percent</th>
                    </tr>
                </thead>
                <!-- /thead -->
              
                <tbody>
                    <?php $lineNumber = 1;?>
                    <?php $allBicycles = getAllBicycles();?>
                    <?php while($bicycle = mysql_fetch_array($allBicycleBrands)):?>

                    <tr>
                        <th scope="row"><?php echo $lineNumber; ?></th>
                        <td><?php echo $bicycle['id']; ?></td>
                        <td><?php echo $bicycle['name']; ?></td>

                        <?php 
                            $bicycleBrand = getBicycleBrand($bicycle['brand_id']); 
                            $bicycleBrand = mysql_fetch_array($bicycleBrand);
                        ?>

                        <td><?php echo $bicycleBrand; ?></td>

                        <?php 
                            $bicycleType = getBicycleType($bicycle['type_id']); 
                            $bicycleType = mysql_fetch_array($bicycleType);
                        ?>

                        <td><?php echo $bicycleType; ?></td>

                        <td><?php echo $bicycle['gear_number']; ?></td>
                        <td><?php echo $bicycle['wheel_size']; ?></td>
                        <td><?php echo $bicycle['rent_price_hour']." rub".; ?></td>
                        <td><?php echo $bicycle['rent_discount_hour']; ?></td>
                        <td><?php echo $bicycle['rent_discount_percent']."%".; ?></td>
                        <td class="edit-option"><a href="edit-bicycle.php?id=<?php echo $bicycle['id']; ?>"><i class="fa fa-pencil"></i> Edit</a></td>
                        <td class="delete-option"><a href="delete-bicycle.php?id=<?php echo $bicycle['id']; ?>"><i class="fa fa-trash"></i> Delete</a></td>
                    </tr>

                    <?php $lineNumber++;?>

                    <?php endwhile;?>
                </tbody>
                <!-- /tbody -->
            </table>
            <!-- /table -->
        </div>
      <!-- ./jumbotron -->
    </div>
    <!-- ./container -->
</body>
</html>
