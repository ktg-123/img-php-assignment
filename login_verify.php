<?php
include 'dbconnect.php';
session_start();
if(isset($_POST['login'])){
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
                
                if(!empty($_POST['rememberme'])){
     
                    setcookie("username",$username,time()+(24*60*60));
                    setcookie("pass",$pass,time()+(24*60*60));
                }
            else{   
            if(isset($_COOKIE["username"])){
            setcookie("username","");
            }
            if(isset($_COOKIE["pass"])){     
            setcookie("pass","");
            }

        }


                $_SESSION['username']=$username;
                if($row['first_name']==""&&$row['last_name']==""&&$row['avatar']==""){
                    header("Location:profile.php");
                }
                else{
                    header("Location:home.php");
                }
            }
            else{
                $_SESSION['message']="Password is Wrong";    
                header("Location:index.php");
                
            }
    }
    else{
        $_SESSION['message']="Username don't Exist";
    }
    


}
else{
    $_SESSION['message']="Problem";
    header("Location:index.php");

}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }