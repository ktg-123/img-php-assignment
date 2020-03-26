<?php
session_start();
$_SESSION['first_name']=$_POST['first_name'];
$_SESSION['last_name']=$_POST['last_name'];
$_SESSION['mobile_no']=$_POST['mobile_no'];
$_SESSION['username']=$_POST['username'];
$_SESSION['email_id']=$_POST['email_id'];
$_SESSION['pass']=$_POST['pass'];
$_SESSION['gender']=$_POST['gender'];
?>


<html lang="en">
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
<form action="profile.php" onsubmit="return checkerror()" method="POST">
<div >

  <div class="field">
    <label>First Name</label><br>
    <input type="text" name="first_name" placeholder="First Name" id="first_name" required>
    

  </div>
  <div class="field">
    <label>Last Name</label><br>
    <input type="text" name="last_name" placeholder="Last Name" id="last_name">
  </div>
  <div class="field">
    <label>Mobile Number</label><br>
    <input type="text" name="mobile_no" placeholder="Mobile Number" id="mobile_no" required><label id="error_mobile" >Please Enter Valid Indian Mobile Number</label>
  </div>
  <div class="field">
    <label>Username</label><br>
    <input type="text" name="username" placeholder="Username" id="username" required><label id="error_username">Username Already Taken</label>
  </div>
  <div class="field">
    <label>Email</label><br>
    <input type="text" name="email_id" placeholder="Email" id="email_id" required><label id="error_email">Please Enter Valid Email address</label>
  </div>
  <div class="field">
    <label>Password</label><br>
    <input type="password" name="pass" id="pass1" required>
  </div>
  <div class="field">
    <label>Confirm Password</label><br>
    <input type="password" id="pass2" required><label id="error_pass">Passwords Field Don't Match </label>
  </div>
  <label>Gender</label>
    <div class="field">
      <div class="checkbox">
        <input type="radio" name="gender" checked="" value="male" >
        <label for="1">Male</label>
      </div>
    </div>
    <div class="field">
      <div class="checkbox">
        <input type="radio" name="gender" value="female" >
        <label for="2">Female</label>
      </div>
    </div>
    <div class="field">
      <div class="checkbox">
        <input type="radio" name="gender" value="other" >
        <label for="3">Other</label>
      </div>
    </div>
    
  </div>
  </div>
  <br>
  <button type="submit">Submit</button>

 

</form>
</div>
</div>
<script type=""text/javascript" src="registration.js"></script>
</body>
</html>