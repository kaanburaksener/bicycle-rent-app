<html>
	<?php include 'header.php'; ?>
<body>
	<?php include 'functions.php'; ?>
	<?php include 'connectdb.php'; ?>
	<?php
		//Getting data from the former page via POST method
		$status = $_POST["status"];
		$title = $_POST["title"];
		$content = $_POST["content"];
		
		//Status of the post translating into a numeric value
		if($status == 'Taslak')
			$status=0;
		else
			$status=1;

		//Adding news to the db
		addNews($status,$title,$content);

		//Redirect to news page
		header("Location: news.php");
	?>
</body>
</html>