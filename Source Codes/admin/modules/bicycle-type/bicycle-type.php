<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    
    <title>Bicycle Types | Bicycle Rent App</title>

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
            <h2>Bicycle Types</h2>
            
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Type ID</th>
                        <th>Type Name</th>
                    </tr>
                </thead>
                <!-- /thead -->
              
                <tbody>
                    <?php $lineNumber = 1;?>
                    <?php $allBicycleTypes = getAllBicycleTypes();?>
                    <?php while($bicycleType= mysql_fetch_array($allBicycleTypes)):?>

                    <tr>
                        <th scope="row"><?php echo $lineNumber; ?></th>
                        <td><?php echo $bicycleType['id']; ?></td>
                        <td><?php echo $bicycleType['name']; ?></td>
                        <td class="edit-option"><a href="edit-bicycle-type.php?id=<?php echo $bicycleType['id']; ?>"><i class="fa fa-pencil"></i> Edit</a></td>
                        <td class="delete-option"><a href="delete-bicycle-type.php?id=<?php echo $bicycleType['id']; ?>"><i class="fa fa-trash"></i> Delete</a></td>
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
