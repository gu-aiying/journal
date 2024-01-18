<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Главная</title>
	<style type="text/css">
		.container {
			margin: 30px auto;
			padding: 10px;

		}

		.container h1 {
			text-align: center;
			font-size: 24px;
			padding-bottom: 2em;
			color: dimgray;
		}

		.container table {
			width: 100%;
			text-align: center;
		}

		.container table th {
			color: dimgray;
		}

		.container table th,  .container table tr {
			padding: 5px;
		}

		.container table tr {
			font-size: 12px;
		}

		a {
			text-decoration: none;
			color: black;
		}

		a:hover {
			text-decoration: underline;
			color: pink;
		}

		form {
			display: grid;
			justify-content: center;

		}

		input {
			width: 250px;
		}
		textarea {
			width: 250px;
			height: 100px;
		}

		input[type='button'], input[type='reset'] {
			width: 120px;
			margin-right: 8px;
		}


	</style>
</head>
<body>
	<div class="container">

	<?php include 'views/' . $content_view;?>

	</div>
</body>
</html>
