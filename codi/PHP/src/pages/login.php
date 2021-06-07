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
    

</div>

</body>
</html>
