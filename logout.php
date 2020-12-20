<?php
session_start();
unset($_SESSION["user"]);
unset($_SESSION["step"]);
//session_destroy();
/*if(isset($_SESSION["login_path"]))
	{
	unset($_SESSION["login_path"]);
	header("location:home.php");
	}
else*/
	header("location:login.php");


?>