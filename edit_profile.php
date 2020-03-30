<?php
 include dbconnect.php;
  $first_name=$last_name="";
  $first_name_err=$last_name_err="";
  $boolean=true;
  if(isset($_POST['update'])){
   
    if (empty($_POST["first_name"])) {
      $first_name_err = "First Name is required";
    $boolean=false;
    }
     else {
      $first_name = test_input($_POST["first_name"]);
      // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$first_name)) {
          $first_name_err = "Only letters and white space allowed in First Name";
          $boolean=false;
        }
      }
    if (empty($_POST["last_name"])) {
      $last_name_err = "First Name is required";
    $boolean=false;
    }
     else {
      $last_name = test_input($_POST["last_name"]);
      // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$last_name)) {
          $last_name_err = "Only letters and white space allowed in Last Name";
          $boolean=false;
        }
      }
      
      if($boolean){
        $sql="UPDATE INTO kunal_user(first_name,last_name,mobile_no,username,email_id,pass,gender)
        VALUES ($first_name,$last_name,$mobile_no,$username,$email_id,$pass,$gender);";
   
   mysqli_query($conn,$sql);

    header("Location : index.php?signup=success");
      
      }

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
    
</head>
<body>
  <h1>You have Successfully Registered. However in order to login and access all features you need to fill and submit your profile</h1>
<div class="box">
<div class="field">
    <h1><label>Profile Information</label></h1><br>
  </div>
<div>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return checkerror()" method="POST" enctype="multipart/form-data">
<div >

  <div class="field">
    <label>First Name</label><br>
    <input type="text" name="first_name" placeholder="First Name" id="first_name"  required>
    

  </div>
  <div class="field">
    <label>Last Name</label><br>
    <input type="text" name="last_name" placeholder="Last Name" id="last_name" value="<?php if (isset($last_name)) echo $last_name;?>">
  </div>
  <div class="field">
<label for="photo" >Profile Picture </label>
<input type="file" id="photo" name="photo" required>
</div>


  <button type="submit" name="update">Submit</button>

 
</div>
</form>
</div>
</div>
<script src="registration.js"></script>
</body>
</html>