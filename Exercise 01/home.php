<?php
ob_start();

?>

<html>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#hide").click(function(){
    $("#register").hide();
    $("#log_in").show();

   
  });
  $("#show").click(function(){
    $("#register").show();
    $("#log_in").hide();

  });
});
</script>
<style>
<?php
include "css/style.css";

?>

</style>

<title>home</title>

</head>
<body>
    
<div class="grid-container">

<div class="grid-item" id="register">
   
<h3>Register</h3>
<form method="post" action="">
   
   
   <input type="text" autocomplete="off" name="user_full_name" placeholder=" Full name" required />
   
   <input type="text" autocomplete="off" name="user_nam" placeholder="Username" required />
   <input type="password" autocomplete="off" name="user_pass" placeholder="password" required />
   <input type="password" autocomplete="off" name="user_conf_pass" placeholder="confirm password" required />

   <input type="email" autocomplete="off" name="user_email" placeholder="Email" required />
   <input type="text" autocomplete="off" name="user_phone" placeholder="Phone" required />
   <input type="date" autocomplete="off" name="user_date" required />

   <input type="text" autocomplete="off" name="user_scn" placeholder="Social Security Number" required />



  <input type="submit" name="register" VALUE="register"/>
  <a id="hide">Already have an account? Sign in
    </a>


</form>


    </div>
    <div class="grid-item" id="log_in">
    <h3>Log in</h3>

    <form method="post" action="">
   
    <input type="text" autocomplete="off" name="user_nam" placeholder="Username" required />

  
    <input type="password" autocomplete="off" name="password" placeholder="Password" required />
   




  <input type="submit" name="log_in" VALUE="Login"/>
  <a id="show">Create New Account</a>

</form>
</div>


</div>

</body>
</html>
<?php
require 'db.php';
session_start();

if(isset($_POST['log_in'])){
	$user = $_POST['user_nam'];
	$pass = $_POST['password'];
	
	$qu = "select * from user_tbl where user_nam = '$user' && user_password = '$pass'";
	
	if(mysqli_num_rows(mysqli_query($con, $qu)) > 0){
		$_SESSION['user_nam'] = $user;
		header("Location: safe.php");
	} else {
    echo "<script type='text/javascript'>alert('enter a valid user name');</script>";

  }}
?>

<?php

require_once "db.php";


if (isset($_POST['register'])) {

   
        $user_full_name = $_POST['user_full_name'];
     
        $user_nam = $_POST['user_nam'];
         
        $user_password=$_POST['user_pass'];
        $user_conf_pass=$_POST['user_conf_pass'];

        $user_email=$_POST['user_email'];
        $user_phone=$_POST['user_phone'];
        $user_date=$_POST['user_date'];
        $user_scn=$_POST['user_scn'];
    if($user_password!=$user_conf_pass){
        echo"please confirm password";


    }
    
    else{


        $sql = "INSERT INTO user_tbl (full_name,user_nam,user_password,user_email,user_phone,user_date,user_scn)
         VALUES ('$user_full_name','$user_nam','$user_password','$user_email','$user_phone','$user_date','$user_scn')";
        if (mysqli_query($con, $sql)) {
            echo "New record created successfully !";
            header('Location: home.php'); //redirects to the controller without resubmitting


        } else {
            echo "Error: " . $sql . "
    " . mysqli_error($con);
        }
        mysqli_close($con);
        
    }
    
    
    }
    ob_flush();
ob_end_clean();

?>