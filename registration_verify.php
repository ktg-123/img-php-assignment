<?php
session_start();
include 'dbconnect.php';
if(isset($_POST["signup_submit"])){
$mobile_no=$_POST['mobile_no'];
$email_id=$_POST['email_id'];
$username=$_POST['username'];
$pass=$_POST['pass'];
$pass_cnf=$_POST['pass_cnf'];
$phn="/^(?:(?:\+|0{0,2})91(\s*[\ -]\s*)?|[0]?)?[789]\d{9}|(\d[ -]?){10}\d$/";
$em="/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/";
$passtest="/^[A-Za-z0-9@_\.]{1,}$/";
$uid="/^[A-Za-z0-9@_\.]{1,}$/";
    if(!preg_match($em,$email_id)||!preg_match($phn,$mobile_no)||!preg_match($passtest,$pass)||!preg_match($uid,$username)){
            $_SESSION['message']="Please Enter valid Charachters";
            header("Location:registration.php");
    }
    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
 $mobile_no=test_input($mobile_no);
 $email_id=test_input($email_id);       
 $pass=test_input($pass);
 $username=test_input($username);

//$pass=password_hash($pass,PASSWORD_BYCRYPT);

$sql="INSERT INTO kunal_user(mobile_no,email_id,pass,username) VALUES ('$mobile_no','$email_id','$pass','$username')";
$result=mysqli_query($conn,$sql);
    if($result){
        header("Location : index.php");
    }
    else{
        $_SESSION['message']="User Could not be Added to Database";
        header("Location:registration.php");    
    }
}
else{
    header("Location : index.php");
}