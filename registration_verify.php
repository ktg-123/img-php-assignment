<?php
ob_start();
session_start();

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
include 'dbconnect.php';
if($_POST['user_name']){
    $user_name=$_POST['user_name'];
    $user_name=test_input($user_name);
    $user_query="SELECT * FROM kunal_user where username='$user_name';";
    $user_result=mysqli_query($conn,$user_query);
    echo mysqli_num_rows($user_result);

}

else if(isset($_POST["signup_submit"])){
$gender=$_POST['gender'];
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
    

 $mobile_no=test_input($mobile_no);
 $email_id=test_input($email_id);       
 $pass=test_input($pass);
 $username=test_input($username);
 $gender=test_input($gender);
 $pass=password_hash($pass,PASSWORD_BCRYPT);
 
$sql="INSERT INTO kunal_user(mobile_no,email_id,pass,username,gender) VALUES ($mobile_no,'$email_id','$pass','$username','$gender');";
//echo $sql ;
//die();
$result=mysqli_query($conn,$sql);
    if($result){
       //echo "Hello";
        header("Location:index.php");
        die();
    }
    else{
        $_SESSION['message']="User Could not be Added to Database";
        header("Location:registration.php");    
    }
}
else{
    header("Location:index.php");
}