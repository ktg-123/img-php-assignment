<?php
include 'dbconnect.php';
session_start();
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
    function noHTML($input, $encoding = 'UTF-8')
    {
        return htmlentities($input, ENT_QUOTES | ENT_HTML5, $encoding);
    }
if($_POST['sendmsg']){
    $fromuser_name=$_SESSION['username'];
    $touser_name=$_SESSION['touser_name'];
    $msg=$_POST['msg'];
    $fromuser_name=test_input($fromuser_name);
    $touser_name=test_input($touser_name);
    $msg=noHTML($msg);
    //$msg=mysql_real_escape_string($conn,$msg);
$sql="INSERT INTO kunal_message(touser_name,fromuser_name,msg) VALUES ('$touser_name','$fromuser_name','$msg'); ";
//echo $sql; die();
$result=mysqli_query($conn,$sql);
if($result){
    //echo "hie";die();
    header("Location:chats.php");
}
else{

}
}
else{
    header("Location:home.php");
}