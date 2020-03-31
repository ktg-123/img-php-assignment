<?php
 include 'dbconnect.php';
    session_start();
if(isset($_SESSION['username'])){
?>
<html>
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
<form action="profile_verify.php" onsubmit="return check()" method="POST" enctype="multipart/form-data">
<div >

  <div class="field">
    <label>First Name</label><br>
    <input type="text" name="first_name" placeholder="First Name" id="first_name"  required><label id="error_first" style="visibility:hidden;" >Only Alphabets Allowed</label>
    

  </div>
  <div class="field">
    <label>Last Name</label><br>
    <input type="text" name="last_name" placeholder="Last Name" id="last_name" required><label id="error_last" style="visibility:hidden;">Only Alphabets Allowed</label>
  </div>
  <br>
  <div class="field">
<label for="photo" >Profile Picture </label><br>
<input type="file" id="photo" name="avatar" required style="border:0px">
</div>
<br>

  <button type="submit" name="update">Submit</button>
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
<script>
    function check(){
var first="/^[A-Za-z]{1,}$/";
var last="/^[A-Za-z]{1,}$/";
var first_name=document.getElementById("first_name").value;
var last_name=document.getElementById("last_name").value
if(first.test(first_name)){
        document.getElementById("error_first").style.visibility="hidden"
    }
    else{
        document.getElementById("error_first").style.visibility="visible";
        return false;
    }
if(last.test(last_name)){
        document.getElementById("error_last").style.visibility="hidden"
    }
    else{
        document.getElementById("error_last").style.visibility="visible";
        return false;
    }



    }
</script>
</body>
</html>
<?php
}
else{
    header("Location:index.php");
}