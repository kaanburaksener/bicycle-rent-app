<html>
	<?php include 'header.php'; ?>
<body>
	<?php include 'functions.php'; ?>
	<?php include 'connectdb.php'; ?>
	<?php
		//Getting data from the former page via POST method
		$id = $_POST["id"];
		$question = $_POST["question"];
		$answer = $_POST["answer"];

		addQuestion($id, $question);

		addAnswers($answer);

		//Redirect to event page
		header("Location: event-settings.php?id=".$id);
	?>
</body>
</html>