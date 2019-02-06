<?php
require_once("config.php");
session_start();

if(isset($_POST["step"])){
	if (isset($_POST["username"]) && isset($_POST["password"])) {
		if(trim($_POST["username"]) != "" && trim($_POST["password"]) != ""){
			$username = trim(mysqli_real_escape_string($db_conn, $_POST["username"]));
			$password = trim(mysqli_real_escape_string($db_conn, $_POST["password"]));
			$result = mysqli_query($db_conn, "SELECT * FROM ".TABLE_PREFIX."users WHERE username = '".$username."'") or die("Error: mysqli query");
			if(mysqli_num_rows($result) == 1){
				$row = mysqli_fetch_assoc($result);
				$passwordhash = hash('sha256', $row["salt1"].$password.$row["salt2"]);
				if($row["password"] == $passwordhash){
					$_SESSION[SESSION_NAME_PREFIX."logged_in"] = true;
					$_SESSION[SESSION_NAME_PREFIX."username"] = $username;
					$row = mysqli_fetch_assoc($result);
					$_SESSION["rank"] = $row['rank'];
					header("Location: ../table.php?table=tablet");
					exit();
				}
				else{
					$error = "The password is incorrect.";
				}
			}
			else{
				$error = "Username does not exist.";
			}
		}
		else{
			$error = "Please fill in the form!";
		}
	}
	else{
		$error = "Please fill in the form!";
	}

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
	
	<div class="center-box">
		<h1 class="centered-text">Login</h1>
		<form action="" method="POST" style="text-align: left;">
			<label class="block">
				Username:<br>
				<input type="text" name="username" id="username" class="fill-available" required>
			</label>
			<label class="block">
				Password:<br>
				<input type="password" name="password" id="password" class="fill-available" required>
			</label>
			<input type="submit" name="step" value="Login">
			<?php
				if(isset($error)){
					echo "<div style='color: red'>$error</div>";
				}
			?>
			<a href="register.php" class="black-text block">Dont have an account? Click here to register!</a>
		</form>
	</div>

</body>
</html>