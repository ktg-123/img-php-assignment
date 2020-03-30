<?php
include 'dbconnect.php';
session_start();
if($_POST['login']){
$username=$_POST['username'];
$pass=$_POST['pass'];
$passtest="/^[A-Za-z0-9@_\.]{1,}$/";
$uid="/^[A-Za-z0-9@_\.]{1,}$/";
    if(!preg_match($passtest,$pass)||!preg_match($uid,$username)){
            $_SESSION['message']="Please Enter Valid Charachters";
            header("Location:index.php");
    }

    $username=test_input($username);
    $pass=test_input($pass);

    $sql="SELECT * FROM kunal_user  where username='$username'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
            if(password_verify($pass,$row['pass'])){


                if($row['first_name']==""&&$row['last_name']==""&&$row['image']==""){
                    header("Location : profile.php");
                }
                else{
                    header("Location : home.php");
                }
            }
            else{
                $_SESSION['message']="Password is Wrong";    
                header("Location : index.php");
                
            }
    }
    else{
        $_SESSION['message']="Username don't Exist";
    }
    


}
else{
    header("Location:index.php");
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }