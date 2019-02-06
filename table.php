<?php
require_once("system.php");
global $db_conn;
//doesHaveRank(3);
if($_GET['table']){
		if(isset($_GET['newLine'])){
		$sql_newLine = "INSERT INTO `pophone_".$_GET['table']."` (id) VALUES (NULL)";
			mysqli_query($db_conn ,$sql_newLine);

		}
		if(isset($_GET['deleteLine'])){
			$sql_deleteLine = "DELETE FROM `pophone_".$_GET['table']."` WHERE id='".$_GET['deleteLine']."'";
			mysqli_query($db_conn ,$sql_deleteLine);
		}
		$sql_main = "SELECT * FROM `pophone_".$_GET['table']."` WHERE id='".$_GET['id']."'";
		$result = mysqli_query($db_conn, $sql_main);
		$row = mysqli_fetch_assoc($result);
		$things = sizeof($_GET)-2;
		if(isset($_GET['table']) && isset($_GET['id'])){
		$sql = "UPDATE `pophone_".$_GET['table']."` SET id='".$_GET['id']."' ";

		foreach ($_GET as $key => $value) {
			if($key == $value || $key == "table"){
				continue;
			}
			$sql .= ",`".str_replace("_", " ", $key)."`='".$value."' ";
		}
		/*$sql_update = "SELECT * FROM pophone_rank WHERE `username`='".$_SESSION[SESSION_NAME_PREFIX."username"]."'";
		$result_update = mysqli_query($db_conn,$sql_update);
		print_r($result_update['update']);*/
		if(isset($_GET['Legutóbb_updatelve'])){
			$sql .= ", `Legutóbb updatelve` = '".date("Y/m/d h:i:sa")."' ";
		}

		if(isset($_GET['Induló_Ár']) && isset($_GET['Végső_Ár'])){
			$middle = ( (int)$_GET['induló_ár'] + ((int)$_GET['Végső_Ár'] - (int)$_GET['Induló_Ár']) / 2);
			$sql .= ", `középár`='".$middle."', `Célár` = '".($middle*0.8)."'";
		}
		if(isset($_GET['Beszerzési_ár']) && isset($_GET['Eladási_ár'])){
			$sql .= ", `áfa`='".round(((int)$_GET['Eladási_ár']-(int)$_GET['Beszerzési_ár'])/1.27)."', `Nettó profit`='".round(((int)$_GET['Eladási_ár']-(int)$_GET['Beszerzési_ár'])
			-(((int)$_GET['Eladási_ár']
				-(int)$_GET['Beszerzési_ár'])/1.27))."' ";
		}
		if(isset($_GET['Bekerülési_Bruttó']) && isset($_GET['Kikerülési_Bruttó'])){
			$round = 0;
			if((int)$_GET['Kikerülési_Bruttó'] !== 0)
				{
					$round = round((((int)$_GET['Kikerülési_Bruttó']-(int)$_GET['Bekerülési_Bruttó'])) / (int)$_GET['Kikerülési_Bruttó'], 3);
				}
			$sql .= ", `Nettó profit`='".round((int)$_GET['Kikerülési_Bruttó']-(int)$_GET['Bekerülési_Bruttó'])."', `nettó %`='".$round."' ";
		}

		$sql .= "WHERE `id`='".$_GET['id']."'";
		//echo $sql;
		mysqli_query($db_conn, $sql);
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ügyviteli rendszer </title>

<link rel="apple-touch-icon" sizes="144x144" href="pophone/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="pophone/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="pophone/favicon/favicon-16x16.png">
<link rel="manifest" href="pophone/favicon/site.webmanifest">
<link rel="mask-icon" href="pophone/favicon/safari-pinned-tab.svg" color="#157996">
<link rel="shortcut icon" href="pophone/favicon/favicon.ico">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-config" content="pophone/favicon/browserconfig.xml">
<meta name="theme-color" content="#ffffff">


			

</head>
<body>
	<h2><center><p><?php echo $_GET['table'];?></p></center></h2>
	<form action='table.php' method='get'>
		<input type="text" name="newLine" value='true' class='invisible'>
		<input type="text" name="table" value=<?php echo "'".$_GET['table']."'"?> class='invisible'>
		<input class="New-line" type="submit" name="submit" value='New Line'>
	</form>
	<form  action='table.php' method='get'>
		<input type="text" name="table" value=<?php echo "'".$_GET['table']."'"?> class='invisible'>
		<input class="line-deleter" type="text" name="deleteLine" placeholder="Don't delete random lines">
		<input class="Delete-line" type="submit" name="submit" value='Delete Line'>
		
	</form>
	<div>
		<?php
		//call function
		if($_GET['table']){
		oneOfTheAll($_GET['table']);
	}
		?>
	</div>


</body>
</html>