<html>
	<?php include 'header.php'; ?>
<body>
	<?php include 'functions.php'; ?>
	<?php include 'connectdb.php'; ?>
	<?php
		//Getting data from the former page via GET method
		$id = $_GET["id"];
		
		//Adding news to the db
		deleteNews($id);

		//Redirect to news page
		header("Location: news.php");
	?>
</body>
</html>