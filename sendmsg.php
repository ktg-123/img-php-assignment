<?php
include 'dbconnect.php';
session_start();
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
if($_POST['sendmsg']){
    $fromuser_name=$_SESSION['username'];
    $touser_name=$_SESSION['touser_name'];
    $msg=$_POST['msg'];
    $fromuser_name=test_input($fromuser_name);
    $touser_name=test_input($touser_name);
    $msg=test_input($msg);
$sql="INSERT INTO kunal_message(touser_name,fromuser_name,msg) VALUES ('$touser_name','$fromuser_name','$msg'); ";

$result=mysqli_query($conn,$sql);
if($result){
    //echo "hie";die();
    header("Location:chats.php");
}
}
else{
    header("Location:home.php");
}