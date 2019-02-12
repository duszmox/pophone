<style type="text/css">
	.login-button {
		    color: #444444;
		    background: #F3F3F3;
		    border: 1px #DADADA solid;
		    padding: 5px 10px;
		    border-radius: 2px;
		    font-weight: bold;
		    font-size: 9pt;
		    outline: none;
		    height: 90px;
		    width: 50%;
		    margin-top:50px;
		    font-size: 50px;
			}

			.login-button:hover {
			    border: 1px #C6C6C6 solid;
			    box-shadow: 1px 1px 1px #EAEAEA;
			    color: #333333;
			    background: #F7F7F7;
			}

			.login-button:active {
			    box-shadow: inset 1px 1px 1px #DFDFDF;   
			}

			/* Blue button as seen on translate.google.com*/
			.login-button.blue {
			    color: white;
			    background: #4C8FFB;
			    border: 1px #3079ED solid;
			    box-shadow: inset 0 1px 0 #80B0FB;
			}

			.login-button.blue:hover {
			    border: 1px #2F5BB7 solid;
			    box-shadow: 0 1px 1px #EAEAEA, inset 0 1px 0 #5A94F1;
			    background: #3F83F1;
			}

			.login-button.blue:active {
			    box-shadow: inset 0 2px 5px #2370FE;   
			}
</style>
<?php
require_once("config.php");
session_start();
if(!$_SESSION[SESSION_NAME_PREFIX."logged_in"]){
	header("Location: http://andrasdev.com/pophone/table.php?table=tablet");
	echo "<center><a href=' http://andrasdev.com/pophone/login/login.php'><button class='login-button blue'>LOGIN</button></a></center>";
	exit();
}
	header("Location: http://andrasdev.com/pophone/login/login.php");
?>