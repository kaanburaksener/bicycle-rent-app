<html>
	<?php include 'header.php'; ?>
<body>
	<?php include 'functions.php'; ?>
	<?php include 'connectdb.php'; ?>
	<?php
		//Getting data from the former page via POST method
		$name = $_POST["name"];
		$lastname = $_POST["lastname"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		$role = $_POST["role"];
		//Status of the post translating into a numeric value
		switch ($role) {
			case 'Admin':
				$role = 0;
				break;

			case 'Mezun':
				$role = 2;
				break;

			case 'Ogrenci':
				$role = 3;
				break;

			case 'Editor':
				$role = 1;
				break;
			
			default:
				$role = -1;
				break;
		}
		

		//Adding user to the db
		addUser($name, $lastname, $email, $password, $role);

		//Redirect to users page
		header("Location: users.php");
	?>
</body>
</html>