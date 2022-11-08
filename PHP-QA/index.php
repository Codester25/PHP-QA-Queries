<?php

	ini_set('display_errors', 'On');
  error_reporting(E_ALL);

	include './includes/db.php';

?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Literata|Open+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./resources/css/style.css">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="./resources/js/script.js"></script>
	<title>Employee Manager</title>
</head>
	<body>		
		<?php include("./includes/header.php"); ?>
		<?php echo "<p>	This is a brief introduction to this page. It allows for user input of their name to be submited in the upper right corner with the header and will stay throughout. 
		The navigation bars will display the question, the query, and then the result of the query. </p>"; ?>
		<?php include("./includes/nav.php"); ?>

		<?php include("./includes/content.php"); ?>

		<?php include("./includes/footer.php"); ?>
	</body>
</html>
