<?php
session_start();
include 'dbconnect.php';

if(isset($_SESSION['username'])){
    

$username=$_SESSION['username'];
$sql="SELECT * FROM kunal_user where username=$username';";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
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
    <?php echo $username;?></h1>
    <img src="<?php  echo 'avatar/'.$row['avatar']; ?>" height=100 width=100>

    <a href="logout.php">LOGOUT</a><br>
    <a href="edit_profile.php">Edit Profile</a>
    </div>
    <div class="info">
    <h2>Select the user to chat with</h2>
    <form action="showmsg.php">
    <?php
    while($row1=mysqli_query($result1)){

    
    ?>
<input type="radio" value="<?php  echo $row1['username'];?>" name="chat_user" id="<?php  echo $row1['username'];?>">
<label for="<?php  echo $row1['username'];?>"><?php  echo $row1['username'];?></label><br>

    <button type="submit" value="chat" id="chat-btn" name=chat>
    </form>
<?php
}
}
else{
    header('location:index.php');
}
?>


    </div>
</div>
</body>
</html>