<!DOCTYPE html>
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
<form class="ui form">
<div class="eight wide inline field">
  <div class="field">
    <label>First Name</label>
    <input type="text" name="first_name" placeholder="First Name">
  </div>
  <div class="field">
    <label>Last Name</label>
    <input type="text" name="last_name" placeholder="Last Name">
  </div>
  <div class="field">
    <label>Mobile Number</label>
    <input type="text" name="city" placeholder="City Name">
  </div>
  <div class="field">
    <label>Email</label>
    <input type="text" name="email_id" placeholder="Email">
  </div>
  <div class="field">
    <label>Password</label>
    <input type="password" name="pass">
  </div>
  <div class="field">
    <label>Confirm Password</label>
    <input type="password">
  </div>
  <label for="fruit">Gender</label>
    <div class="field">
      <div class="ui radio checkbox">
        <input type="radio" name="gender" checked="" id="1" class="hidden">
        <label for="1">Male</label>
      </div>
    </div>
    <div class="field">
      <div class="ui radio checkbox">
        <input type="radio" name="gender" id="2" class="hidden">
        <label for="2">Female</label>
      </div>
    </div>
    <div class="field">
      <div class="ui radio checkbox">
        <input type="radio" name="gender" id="3" class="hidden">
        <label for="3">Other</label>
      </div>
    </div>
    
  </div>
  </div>
  <br>
  <button class="ui button" type="submit">Login</button>
</form>
</div>
</div>
</body>
</html>