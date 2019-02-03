<?php
	
	require_once("auth.php");
	require_once("config.php");
	header("Location: ../table.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Succesful login!</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="center-box">
		<h2>Succesful login!</h2>
		<p>Welcome to <?php echo APP_NAME; ?>!</p>
		<?php
			echo SUCCESFUL_LOGIN_TEXT;
		?>
		
	</div>
</body>
</html>