<?php
header("Location: login.php");
require_once("config.php");

function generate_salt($length){
	return bin2hex(openssl_random_pseudo_bytes($length/2));
}	
if(isset($_POST["step"])){
	if (isset($_POST["username"]) && isset($_POST["password"])) {
		if(trim($_POST["username"]) != "" && trim($_POST["password"]) != ""){
			if(strlen(trim($_POST["username"])) < 3){
				$error = "The username is not long enough!";
			}
			elseif (strlen(trim($_POST["password"])) < 6) {
				$error = "The password is not long enough!";
			}
			else{
				if(preg_match("/^[a-zA-Z0-9]+$/", trim($_POST["username"])) != 1){
					$error = "The username can only contain letters and numbers!";
				}
				elseif(preg_match("/^[a-zA-Z0-9]+$/", trim($_POST["password"])) != 1){
					$error = "The password can only contain letters and numbers!";
				}
				else{
					$sql = "SELECT * FROM ".TABLE_PREFIX."users WHERE username = '".mysqli_real_escape_string($db_conn, trim($_POST["username"]))."'";
					$result = mysqli_query($db_conn, $sql) or die("Error: mysqli query".mysqli_error($db_conn));
					if(mysqli_num_rows($result) != 0){
						$error = "This username is alredy registered.";
					}
					else{
						$salt1 = generate_salt(20);
						$salt2 = generate_salt(20);

						$passwordhash = hash('sha256', $salt1.trim($_POST["password"]).$salt2);


						$sql = "INSERT INTO ".TABLE_PREFIX."users (username, password, salt1, salt2) 
							VALUES ('".mysqli_real_escape_string($db_conn, trim($_POST["username"]))."', '$passwordhash', '$salt1', '$salt2')";
						mysqli_query($db_conn, $sql) or die("Error: insert into users table".mysqli_error($db_conn));
						echo "<script>alert('Success registration'); document.location.href = 'login.php';</script>";
					}

				}
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
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
	
	<div class="center-box">
		<h1 class="centered-text">Registration</h1>
		<form action="" method="POST" style="text-align: left;">
			<label class="block">
				Username:<br>
				<input type="text" name="username" id="username" pattern=".{3,}" title="3 characters minimum" class="fill-available" required placeholder="e.g.: stevejobs6560, ronaldmyracle">
			</label>
			<label class="block">
				Password:<br>
				<input type="password" name="password" id="password" pattern=".{6,}" title="6 characters minimum" class="fill-available" required placeholder="e.g.: u_2row, legoland2000">
			</label>
			<input type="submit" name="step" value="Register">
			<?php
				if(isset($error)){
					echo "<div style='color: red'>$error</div>";
				}
			?>
			<a href="login.php" class="black-text block">Have you already an account? Click here to log in!</a>
		</form>
	</div>

</body>
</html>