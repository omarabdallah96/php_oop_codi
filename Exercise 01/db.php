<?php
$con = mysqli_connect('localhost','root','','codi_DB');
mysqli_set_charset($con,"utf8");
if(mysqli_connect_errno()){
	echo 'database not connected';
}else{
	echo '<h3>connected</h3>';



}


?>
