<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div class="sticky">


<form  class="lis" method="post">

<input id="logout" type="submit" value="logout" name="logout"/>
<a href="tax.php">tax income salary</a>



</form >







</div>


<?php
require 'auth.php';



if (isset($_POST['logout'])) {
    unset($_SESSION['user_nam']);
    header("Location: home.php");
    exit();
}


?>
</body>
</html>