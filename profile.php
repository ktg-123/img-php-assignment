<?php
 include 'dbconnect.php';
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
  <h1>You have Successfully Registered. However in order to login and access all features you need to fill and submit your profile</h1>
<div class="box">
<div class="field">
    <h1><label>Profile Information</label></h1><br>
  </div>
<div>
<form action="profile_verify.php" onsubmit="return checkerror()" method="POST" enctype="multipart/form-data">
<div >

  <div class="field">
    <label>First Name</label><br>
    <input type="text" name="first_name" placeholder="First Name" id="first_name"  required>
    

  </div>
  <div class="field">
    <label>Last Name</label><br>
    <input type="text" name="last_name" placeholder="Last Name" id="last_name" value="<?php if (isset($last_name)) echo $last_name;?>">
  </div>
  <br>
  <div class="field">
<label for="photo" >Profile Picture </label><br>
<input type="file" id="photo" name="photo" required style="border:0px">
</div>
<br>

  <button type="submit" name="update">Submit</button>

 
</div>
</form>
</div>
</div>
<script src="registration.js"></script>
</body>
</html>