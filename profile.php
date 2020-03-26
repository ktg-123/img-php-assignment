<?php
session_start();
?>

<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.css"/>
<link rel="stylesheet" type="text/css" href="registration.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    
</head>
<body>
<div class="box">
<div class="field">
    <h1><label>Profile Information</label></h1><br>
  </div>
<div>
<form action="user_created.php" onsubmit="return checkerror()">
<div >

  <div class="field">
    <label>First Name</label><br>
    <input type="text" name="first_name" placeholder="First Name" id="first_name" value="<?php echo $_SESSION['first_name'];?>" required>
    

  </div>
  <div class="field">
    <label>Last Name</label><br>
    <input type="text" name="last_name" placeholder="Last Name" id="last_name" value="<?php echo $_SESSION['last_name'];?>">
  </div>
  <div class="field">
    <label>Mobile Number</label><br>
    <input type="text" name="mobile_no" placeholder="Mobile Number" id="mobile_no" value="<?php echo $_SESSION['mobile_no'];?>" required><label id="error_mobile" >Please Enter Valid Indian Mobile Number</label>
  </div>
  <div class="field">
    <label>Username</label><br>
    <input type="text" name="username" placeholder="Username" id="username" value="<?php echo $_SESSION['username'];?>" readonly><label id="error_username">Username Already Taken</label>
  </div>
  <div class="field">
    <label>Email</label><br>
    <input type="text" name="email_id" placeholder="Email" id="email" value="<?php echo $_SESSION['email_id'];?>" required><label id="error_email">Please Enter Valid Email address</label>
  </div>
  <div class="field">
    <label>Password</label><br>
    <input type="password" name="pass" id="pass1" value="<?php echo $_SESSION['pass'];?>" required>
  </div>
  <div class="field">
    <label>Confirm Password</label><br>
    <input type="password" id="pass2" value="<?php echo $_SESSION['pass'];?>" required><label id="error_pass">Passwords Field Don't Match </label>
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
  <div class="field">
    <label>City</label><br>
    <input type="text" name="city_name" placeholder="City Name" id="city_name" required>
  </div>
  <div class="field">
    <label>Age</label><br>
    <input type="text" name="age" placeholder="Age" id="age" required>
  </div>
  <div class="field">
    <label>Pincode</label><br>
    <input type="text" name="pincode" placeholder="Pincode" id="pincode" required>
  </div>
  <br>
  <button type="submit">Submit</button>

 

</form>
</div>
</div>
<script type=""text/javascript" src="registration.js"></script>
</body>
</html>