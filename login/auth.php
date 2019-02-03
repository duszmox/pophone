<?php
require_once("config.php");
session_start();
if(!$_SESSION[SESSION_NAME_PREFIX."logged_in"]){
//header("Location: http://andrasdev.com/pophone/login/table.php?table=tablet");
echo "<a href='login/'>LOGIN</a>";
	exit();
}
?>