<?php
	session_start();
	require_once("config.php");
	$_SESSION[SESSION_NAME_PREFIX."logged_in"] = false;
?>