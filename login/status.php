<?php
	session_start();
	require_once("config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Current status</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<h2>
		Your current status:
		<?php
			if(isset($_SESSION[SESSION_NAME_PREFIX."logged_in"]) && $_SESSION[SESSION_NAME_PREFIX."logged_in"]){
				echo "logged in";
			}
			else{
				echo "logged out";
			}
		?>
	</h2>
</body>
</html>