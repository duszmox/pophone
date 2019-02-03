<?php
require_once("config.php");
session_start();
if(!$_SESSION[SESSION_NAME_PREFIX."logged_in"]){
	header("Location: register.php");
	exit();
}
else{
	header("Location: ../table.php");
	exit();
}

?>