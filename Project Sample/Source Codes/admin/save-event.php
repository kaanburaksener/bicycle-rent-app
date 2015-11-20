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

		/* TO DO 
		if status == "Kesinleşmiş Olay"
		$date = $_POST["date"];
		$place = $_POST["place"];
		$test = $_POST["dtp_input1"];
		*/
		
		//Status of the post translating into a numeric value
		if($status == 'Kararlaştırılmış Etkinlik'){
			$status=1;
			$date = $_POST["datetime"];
			$place = $_POST["place"];
			addEvent($status,$title,$content,$date,$place);

			header("Location: events.php");
		}
		else{
			$status=0;
			addEventSuggestion($status,$title,$content);

			header("Location: event-suggestion.php");
		}
		
	?>
</body>
</html>