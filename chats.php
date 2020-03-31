<?php
session_start();
include 'dbconnect.php';
//$_SESSION['touser_name']="";
?>
<html>
<head>
<style>
body{
    margin:0;
    padding:0;
background:#FFFFFF;
background-size:cover;
background-position: center;
}
textarea{
    font-family: 'Lato', 'Helvetica Neue', Arial, Helvetica, sans-serif;
margin: 0em;
outline: none;
line-height: 1.21428571em;
padding: 0.67857143em 1em;
font-size: 1em;
background: #FFFFFF;
border: 1px solid rgba(34, 36, 38, 0.15);
color: rgba(0, 0, 0, 0.87);
border-radius: 0.28571429rem;
box-shadow: 0em 0em 0em 0em transparent inset;
}

button:hover {
    background-color: #CACBCD;
    background-image: none;
    box-shadow: 0px 0px 0px 1px transparent inset, 0px 0em 0px 0px rgba(34, 36, 38, 0.15) inset;
    color: rgba(0, 0, 0, 0.8);
}
button {
    cursor: pointer;
    display: inline-block;
    min-height: 1em;
    outline: none;
    border: none;
    vertical-align: baseline;
    background: #E0E1E2 none;
        background-color: rgb(224, 225, 226);
        background-image: none;
    color: rgba(0, 0, 0, 0.6);
    font-family: 'Lato', 'Helvetica Neue', Arial, Helvetica, sans-serif;
    margin: 0em 0.25em 0em 0em;
    padding: 0.78571429em 1.5em 0.78571429em;
    text-transform: none;
    text-shadow: none;
    font-weight: bold;
    line-height: 1em;
    font-style: normal;
    text-align: center;
    text-decoration: none;
    border-radius: 0.28571429rem;
}
.message{
    box-sizing:border-box;
    border:1px solid black;
    width:500px;
}
.text-msg{
    position:fixed;
    z-index:4;
    bottom:0;
}


</style>

</head>
<?php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
if(isset($_POST['chat'])||isset($_SESSION['touser_name'])){
$fromuser_name=$_SESSION['username'];

if(!empty($_SESSION['touser_name'])){
    //echo "hi"; die();
  $touser_name=$_SESSION['touser_name'];
}
else{
$touser_name=$_POST['userchat'];
$_SESSION['touser_name']=$touser_name;
}

$touser_name=test_input($touser_name);
//echo $touser_name."Gtu"; die();
$fromuser_name=test_input($fromuser_name);
$sql="SELECT * FROM kunal_message where (touser_name='$touser_name' and fromuser_name='$fromuser_name') || (touser_name='$fromuser_name' and fromuser_name='$touser_name');";
//echo $sql; die();
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_assoc($result)){
    ?>
    <div class=message>
    To:<?php echo $row['touser_name']?><br>
    From:<?php echo $row['fromuser_name']?><br>
    Time:<?php echo $row['time']?><br>
    <b>Message:<?php echo $row['msg'] ?></b>
    </div>
<?php
}
}
else{
   echo "NO CHATS";
}
?>
<div class="text-msg">
<form action="sendmsg.php"  method="POST">
To:<?php echo $touser_name ?><br>
Message<br>
<textarea placeholder="message" name="msg">
</textarea>
<button type="submit" name="sendmsg" value="sendmsg">SEND</button>
</form>
<a href="home.php"> HOME </a>
</div>


<?php
}
else{
    header("Location:home.php");
}
?>