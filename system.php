	<?php
	
?>

<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>



	<?php
//normal things
//session_start();	
//error_reporting(E_ALL^E_NOTICE);
//requires



require_once("connect.php");
require_once("header.php");
require_once("login/auth.php");
$db_conn;

$result = mysqli_fetch_assoc(mysqli_query($db_conn, "SELECT rank FROM pophone_users WHERE username='".$_SESSION[SESSION_NAME_PREFIX.'username']."'"));
$rank = $result['rank'];

// functions will be here
	/*function doesHaveRank($require_rank){
		global $rank;
		if($rank < $require_rank){
			echo '	<script>
				alert("You dont have permission"); // this is the message in ""
				</script>';
		}
	}*/
	function oneOfTheAll($table_name){
		global $db_conn;
		$sql = "SELECT * FROM pophone_".$table_name;
		//echo $sql;
		$result = mysqli_query($db_conn, $sql);
		echo "<table>\n";
		
		$sql_column = "SHOW COLUMNS FROM pophone_".$table_name;
		$result_column = mysqli_query($db_conn,$sql);
		$row = mysqli_fetch_array($result_column);
		$counter = 0;
		$counter_of_goods = 0;
		echo "<th>Ln</th>";
	
		foreach($row as $key => $value){
			if($counter == 0){
				$counter =+1;
				continue;
			}
				if((int)$key === 0){
    				echo "<th>".$key."</th>";
    				
    				$counter_of_goods += 1;
					$keys[$counter_of_goods] = $key;
				}
				$counter +=1;
		}
		echo "\n

		\n";
		$counter = 0;
		while($x = mysqli_fetch_assoc($result)){
			foreach($x as $key => $value){
				if($key=="id"){
					echo "</tr><tr></form>
					<form action='table.php' mathod='get'>
					<td class='td-normal'><input type='submit' value='".$x['id']."' name='".$x['id']."'  class='td-normal td-button'></td>\n
					<input type='text' value='".$table_name."' name='table' class='invisible td-normal'>
					";

					echo "\n";
				}
				echo "<td class='td-normal' class='text-box'><input size='".(mb_strwidth($keys[($counter+1 % sizeof($keys))]))."px'  value='".$value."' name='".$key."'' type='text' class='td-normal'></td>\n";
				
				$counter += 1;
			}
				$counter -= sizeof($keys);

		}
		echo "</table>";
	}
function doesHaveAccessWebpage($username, $table){
 	global $db_conn;
  	$sql = "SELECT ".$table." FROM pophone_rank WHERE username='". $username."'";
  	//echo $sql."sql";
  	$query = mysqli_query($db_conn, $sql);
 	$result = mysqli_fetch_assoc($query);
 	if($result[$table] == '0'){
 		echo "<script>alert('You dont have permisson');
				
			window.history.back();
		</script>";
 	}
 }
function doesHaveAccess($username, $table){
 	global $db_conn;
  	$sql = "SELECT ".$table." FROM pophone_rank WHERE username='". $username."'";
  	
  	$query = mysqli_query($db_conn, $sql);
 	$result = mysqli_fetch_assoc($query);

 	if($result[$table] == '0'){
 		return false;
 	}else{
 		return true;
 	}
 }

?>
