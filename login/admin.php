<a href="../index.php">BACK HOME</a><br>
<?php

require_once("config.php");
if(isset($_GET['OK'])){
	$sql_insert = "UPDATE pophone_users SET id='".$_GET['OK']."', username='".$_GET['username']."', rank='".$_GET['rank']."' WHERE id='".$_GET['OK']."'";
	echo $sql_insert;
	mysqli_query($db_conn, $sql_insert);
}


$sql = "SELECT * FROM pophone_users";

$result = mysqli_query($db_conn, $sql);
echo "<table>\n";
echo "<tr>
	<th>id</th>
	<th>username</th>
	<th>rank</th>	
	</tr><br>";
for($i = 0;$row = mysqli_fetch_assoc($result);$i++){
	echo "<form action='admin.php' method='get'>\n";
	echo "<tr>\n";
	
	
	echo "<td>".$row["id"]."</td>\n";
	echo "<td><input type='text' name='username' value='".$row['username']."'></td>\n";
	echo "<td><input type='text' name='rank' value='".$row['rank']."'></td>\n";
	echo "<td><input type='submit' value='".($row['id'])."' name ='OK'></td>\n
	</form>\n";
	echo "</tr>\n<br>\n";
}
echo "</table>";
?>