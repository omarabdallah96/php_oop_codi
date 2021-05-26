<?php

session_start();

if(!isset($_SESSION['user_nam'])){
	header("Location: home.php");
	exit();
}

	


?>