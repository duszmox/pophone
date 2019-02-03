<?php
//SESSION prefix (This is because we don't want to cause problems for an other app.)
define("SESSION_NAME_PREFIX", "pophone_");
define("TABLE_PREFIX", "pophone_");
define("APP_NAME", "Login app");
define("SUCCESFUL_LOGIN_TEXT", "<a href=''>Dashboard -></a><br><a href='account.php'>My account- -></a><br><a href='logout.php'>Logout -></a>");


//Connecting to database:
define("DB_HOST", "c252um.forpsi.com");
define("DB_NAME", "b9087");
define("DB_USER", "b9087");
define("DB_PASS", "vE4mkcT");
$db_conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
mysqli_query($db_conn, "SET NAMES utf8");
mysqli_query($db_conn, 
	"CREATE TABLE IF NOT EXISTS `".TABLE_PREFIX."users` (
		`id` int(7) NOT NULL AUTO_INCREMENT,
  		`username` varchar(64) COLLATE utf8_hungarian_ci NOT NULL,
  		`password` varchar(64) COLLATE utf8_hungarian_ci NOT NULL,
  		`salt1` varchar(20) COLLATE utf8_hungarian_ci NOT NULL,
  		`salt2` varchar(20) COLLATE utf8_hungarian_ci NOT NULL,
  		PRIMARY KEY (`id`)
	) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;
") or die("Error: Create table");
?> 