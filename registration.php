<?php
include 'dbconnect.php';
session_start();
 
  

  
  
  
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.css"/>
<link rel="stylesheet" type="text/css" href="registration.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Signup</title>
    
</head>

<body>
<div class="box">
<div class="field">
    <h1><label>Registration Form</label></h1><br>
  </div>
<div>
<form  onsubmit="return checkerror()" action="registration_verify.php"  method="POST">

<div>

  <div class="field">
    <label>Mobile Number</label><br>
    <input type="text" name="mobile_no" placeholder="Mobile Number" id="mobile_no" required><label id="error_mobile" >Please Enter Valid Indian Mobile Number</label>
  </div>
  <div class="field">
    <label>Username</label><br>
    <input type="text" name="username" placeholder="Username" id="username" required><label id="error_username">Alphanumeric,@,_,. are Allowed</label><br>

  </div>
  <div class="field">
    <label>Email</label><br>
    <input type="text" name="email_id" placeholder="Email" id="email_id" required><label id="error_email">Please Enter Valid Email address</label>
  </div>
  <div class="field">
    <label>Password</label><br>
    <input type="password" name="pass" id="pass1" required><label id="error_blank">Password Format is same as Username</label>
  </div>
  <div class="field">
    <label>Confirm Password</label><br>
    <input type="password" name="pass_cnf" id="pass2" required><label id="error_pass">Passwords Field Don't Match </label>
  </div>
  <label>Gender</label>
    <div class="field">
      <div class="checkbox">
        <input type="radio" name="gender" checked="" id="1" value="male" >
        <label for="1">Male</label>
      </div>
    </div>
    <div class="field">
      <div class="checkbox">
        <input type="radio" name="gender" value="female" id="2">
        <label for="2">Female</label>
      </div>
    </div>
    <div class="field">
      <div class="checkbox">
        <input type="radio" name="gender" value="other" id="3">
        <label for="3">Other</label>
      </div>
    </div>
 
  </div>
  </div>
  <br>
 
  <button type="submit" value="submit" name="signup_submit">Submit</button><br>
<?php
if(isset($_SESSION['message'])){
  echo $_SESSION['message'];
  unset($_SESSION['message']);
}


?>
  
</div>
</form>
</div>
</div>
<script type="text/javascript" src="registration.js"></script>
</body>
</html>