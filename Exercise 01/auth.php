<?php

// فتح الجلسه لاستدعاء قيمتها
session_start();

// داله للتحقق من وجود قيمه فى جلسة username
if(!isset($_SESSION['user_nam'])){
	// اذا كانت القيمه فارغه يتم الانتقال الى صفحة تسجيل الدخول
	header("Location: home.php");
	exit();
}

	


?>