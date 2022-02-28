<html>
	<head>
		<title> dołączanie pliku </title>
	</head>
	
	<body>
		<h3> początek strony </h3>
		<?php
			@include './script.php';
			echo '<br>';
			@include './text.php';
		?>
		<h3> koniec strony </h3>
	</body>