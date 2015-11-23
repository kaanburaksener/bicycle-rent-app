<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    
    <title>Add A New Bicycle Brand | Bicycle Rent App</title>

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

    <div class="container">
        <div class="jumbotron">
            <h2>Add A New Bicycle Brand</h2>
            
            <form role="form" action="save-bicycle-brand.php" method="post">
                <!-- Bicycle Brand Name -->
                <div class="form-group">
                    <label for="bicycle-brand-name">Brand Name</label>
                
                    <input type="text" class="form-control" id="bicycle-brand-name" name="bicycle-brand-name" placeholder="Enter the name of brand...">
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
