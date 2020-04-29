<?php
session_start();
if(isset($_SESSION['username'])){
 // echo "hi"; die();
  header("Location:home.php");
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.css"/>
<link rel="stylesheet" type="text/css" href="registration.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<div class="box">
<div class="field">
    <h1><label>Login</label></h1><br>
  </div>
<div>
<form  onsubmit="return checkerror()" action="login_verify.php"  method="POST">
<div>
  <div class="field">
    <label>Username</label>
    <input type="text" name="username" placeholder="Username" id="username" value="<?php if(isset($_COOKIE['username'])){echo $_COOKIE['username'];} ?>" required><label id="error_username">Alphanumeric,@,_,. are Allowed</label><br>
  </div>
  <div class="field">
    <label>Password</label>
    <input type="password" name="pass" id="pass1" value="<?php if(isset($_COOKIE['username'])){echo $_COOKIE['pass'];} ?>" required><label id="error_blank">Alphanumeric,@,_,. are Allowed</label>
  </div>
  <br>
  <button class="button" type="submit" id="submit" name="login" value="login">Login</button>
  <a href="registration.php">New User? Sign up</a><br><br>
  <div class="field">
    
<input type="checkbox" name="rememberme" id="rememberme" <?php if(isset($_COOKIE['pass'])) { ?> checked <?php  } ?> ><label>Remember Me</label>
  </div>
</div>

  </form>
  <?php
if(isset($_SESSION['message'])){
  echo $_SESSION['message'];
  unset($_SESSION['message']);
}


?>
</div>
</div>
<script>
  function(){
var pass1=document.getElementById("pass1").value;
var username=document.getElementById("username").value;
var passtest=/^[A-Za-z0-9@_\.]{1,}$/
var uid=/^[A-Za-z0-9@_\.]{1,}$/
if(passtest.test(pass1)){
        document.getElementById("error_blank").style.visibility="visible";
        return false;
    }
    else{
        document.getElementById("error_blank").style.visibility="hidden";

    }
    if(uid.test(username)){
        document.getElementById("error_username").style.visibility="hidden"
    }
    else{
        document.getElementById("error_username").style.visibility="visible";
        return false;
    }

  }
</script>
</body>
</html>
