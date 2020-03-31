<?php
session_start();
include 'dbconnect.php';

if(isset($_SESSION['username'])){
    if(isset($_SESSION['touser_name'])){
        unset($_SESSION['touser_name']);
    }

$username=$_SESSION['username'];
$sql="SELECT * FROM kunal_user where username='$username';";
//  echo $sql; die();
$result=mysqli_query($conn,$sql);
 // echo $result; die();
 if($result){
$row=mysqli_fetch_assoc($result);
 }
 else{
     die();
 }
$query="SELECT * FROM kunal_user where username!='$username';";
$result1=mysqli_query($conn,$query);

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.css"/>
<link rel="stylesheet" type="text/css" href="home.css">
    <title>
        Home Page
    </title>
</head>
<body>
<div class=main>
    <div class="id">
    <h1>Welecome <?php echo $row['first_name'];?><br>
    <i>&nbsp&nbsp&nbsp<?php echo $username;?></i></h1>
    <img src="<?php  echo 'avatar/'.$row['avatar'] ?>" height=100 width=100>
<br><br><br>
    <a href="logout.php">LOGOUT</a><br><br>
    <a href="edit_profile.php">Edit Profile</a><br><br>
    </div>
    <div class="info">
    <h2>Select the user to chat with</h2>
    <form action="chats.php" method="POST">
    <?php
    while($row1=mysqli_fetch_assoc($result1)){

    
    ?>
    <div class="field">
<input type="radio" value="<?php  echo $row1['username'];?>" name="userchat" id="<?php  echo $row1['username']; ?>">
<label for="<?php  echo $row1['username'];?>"><?php  echo $row1['username'];?></label><br>
    </div>

<?php
}
}
else{
    header('location:index.php');
}
?>
   <br><br> <button type="submit" value="chat" id="chat-btn" name="chat">CHAT</button>
    </form>


    </div>
</div>
</body>
</html>