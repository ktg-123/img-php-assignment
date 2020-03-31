<?php
  session_start();
include 'dbconnect.php';
if(isset($_SESSION['username'])){
  $username=$_SESSION['username'];
  $sql="SELECT * FROM kunal_user where username='$username';";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($result);

}
  
  
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }
?>

<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.css"/>
<link rel="stylesheet" type="text/css" href="registration.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>


      </style>
    
</head>
<body>
<div class="box">
<div class="field">
    <h1><label>Profile Information</label></h1><br>
  </div>
<div>
<form action="edit_profile_verify.php" onsubmit="return checkerror()" method="POST" enctype="multipart/form-data">
<div >

  <div class="field">
    <label>First Name</label><br>
    <input type="text" name="first_name" placeholder="First Name" id="first_name" value="<?php echo $row['first_name'] ?>" required>
    

  </div>
  <div class="field">
    <label>Last Name</label><br>
    <input type="text" name="last_name" placeholder="Last Name" id="last_name" value="<?php echo $row['last_name'] ?>">
  </div>

<div class="field">
    <label>Mobile Number</label><br>
    <input type="text" name="mobile_no" placeholder="Mobile Number" id="mobile_no" value="<?php echo $row['mobile_no'] ?>" required><label id="error_mobile" >Please Enter Valid Indian Mobile Number</label>
  </div>
  <div class="field">
    <label>Username</label><br>
    <input type="text" name="username" placeholder="Username" id="username" value="<?php echo $row['username'] ?>" required readonly><label id="error_username">Alphanumeric,@,_,. are Allowed</label><br>

  </div>
  <div class="field">
    <label>Email</label><br>
    <input type="text" name="email_id" placeholder="Email" id="email_id" value="<?php echo $row['email_id'] ?>" required><label id="error_email">Please Enter Valid Email address</label>
  </div>
  <div class="field">
    <label>Password</label><br>
    <input type="password" name="pass" id="pass1" required><label id="error_blank">Alphanumeric,@,_,. are Allowed</label>
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
      </div><br><br>
    </div>
    <div class="field">
  <label for="photo" >Profile Picture </label><br>
  <input type="file" id="photo" name="avatar" required style="border:0px">
  </div>
  </div>
  </div>
  <br>


  <button type="submit" name="edit" value="edit_changes" >Edit </button><BR><BR>
  <a href="home.php">HOME</a>
 
</div>
</form><br>

</div>
</div>
<script>
function checkerror(){

var mobile_no=document.getElementById("mobile_no").value;
var username=document.getElementById("username").value;
var email=document.getElementById("email_id").value;
var pass1=document.getElementById("pass1").value;
var pass2=document.getElementById("pass2").value;
var phn=/^(?:(?:\+|0{0,2})91(\s*[\ -]\s*)?|[0]?)?[789]\d{9}|(\d[ -]?){10}\d$/
var em=/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/
var passtest=/^[A-Za-z0-9@_\.]{1,}$/
var uid=/^[A-Za-z0-9@_\.]{1,}$/

    if(phn.test(mobile_no)){
        document.getElementById("error_mobile").style.visibility="hidden"
    }
    else{
        document.getElementById("error_mobile").style.visibility="visible";
        return false;
    }
    if(em.test(email)){
        document.getElementById("error_email").style.visibility="hidden"
    }
    else{
        document.getElementById("error_email").style.visibility="visible"
        return false;
    }
    if(pass1!=pass2){
        document.getElementById("error_pass").style.visibility="visible";
        return false;
    }
    else{
        document.getElementById("error_pass").style.visibility="hidden"
    }
    if(uid.test(pass1)){
        document.getElementById("error_blank").style.visibility="hidden";
    }
    else{

        document.getElementById("error_blank").style.visibility="visible";
        return false;

    }
    if(uid.test(username)){
        document.getElementById("error_username").style.visibility="hidden"
    }
    else{
        document.getElementById("error_username").style.visibility="visible";
        return false;
    }
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

