<html>
	<?php include 'header.php'; ?>
<body>
	<?php include 'functions.php'; ?>
	<?php include 'connectdb.php'; ?>
	<?php
		//Getting data from the former page via POST method
		$id = $_POST["id"];
		$status = $_POST["status"];
		$title = $_POST["title"];
		$content = $_POST["content"];
		$date = $_POST["datetime"];
		$place = $_POST["place"];

		//Status of the post translating into a numeric value
		if($status == 'Kararlaştırılmış Etkinlik'){
			$status=1;
			

			updateEvent($id, $status, $title, $content, $date, $place);

			header("Location: events.php");

		}
		else{
			$status=0;
			updateEventSuggestion($id, $status, $title, $content);

			header("Location: event-suggestion.php");
		}
	?>
</body>
</html>