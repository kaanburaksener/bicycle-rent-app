<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    
    <title>Add A New Bicycle | Bicycle Rent App</title>

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
<body>

    <?php include '../../blocks/main-menu.php'; ?>
    <?php include '../../functions.php'; ?>
    <?php include '../../connectdb.php'; ?>

    <div class="container">
        <div class="jumbotron">
            <h2>Add A New Bicycle Brand</h2>
            
            <form role="form" action="save-bicycle.php" method="post">
                <!-- Bicycle Name -->
                <div class="form-group">
                    <label for="name">Bicycle Name</label>
                
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter the name of bicycle...">
                </div>

                <!-- Bicycle Brand -->
                <div class="form-group">
                    <label for="brand-id">Bicycle Brand</label>

                    <select name="brand-id" class="form-control">

                    <?php $allBicycleBrands = getAllBicycleBrands();?>
                    <?php while($bicycleBrand = mysql_fetch_array($allBicycleBrands)):?>
\
                        <option value="<?php echo $bicycleBrand['id']; ?>"><?php echo $bicycleBrand['name']; ?></option>

                    <?php endwhile;?>
                    </select>
                </div>

                <!-- Bicycle Type -->
                <div class="form-group">
                    <label for="type-id">Bicycle Type</label>

                    <select name="type-id" class="form-control">

                    <?php $allBicycleTypes = getAllBicycleTypes();?>
                    <?php while($bicycleType = mysql_fetch_array($allBicycleTypes)):?>
\
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

                <button type="submit" class="btn btn-custom-save">Save</button>
            </form>
          <!-- /form -->
        </div>
      <!-- ./jumbotron -->
    </div>
    <!-- ./container -->
</body>
</html>
