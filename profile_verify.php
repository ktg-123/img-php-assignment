<?php
session_start();
include 'dbconnect.php';
if(isset($_POST['update'])){
    $username=$_SESSION['username'];
    
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$first="/^[A-Za-z]{1,}$/";
$last="/^[A-Za-z]{1,}$/";     
if(!preg_match($first,$first_name)||!preg_match($last,$last_name)){
    $_SESSION['message']="Please Enter Valid Charachters";
    header("Location : profile.php");
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
$first_name=test_input($first_name);
$last_name=test_input($last_name);    
    if(isset($_FILES['avatar'])){
        $avatar=$_FILES['avatar'];
        $avatar_size=$avatar['size'];
        $avatar_name=$avatar['name'];
        $avatar_tmp_name=$avatar['tmp_name'];
        $avatar_type=$avatar['type'];
            if($avatar_type=="image/jpg"||$avatar_type=="image/jpeg"||$avatar_type=="image/png"){
                if($avatar_size<=2000000){

                    move_uploaded_file($avatar_tmp_name,"avatar/".$avatar_name);


                    $sql="UPDATE kunal_user() set first_name='$first_name',last_name='$last_name',avatar='$avatar_name' where username='$username';";
                    $result=$mysqli_query($conn,$sql);
                    if($result){
                        header("Location : home.php");
                    }
                    else{
                        $_SESSION['message']="Profile Update Failed";
                        header("Location : profile.php");
                    }
                }
                else{
                    $_SESSION['message']="Image size is greater than 2mb";
                        header("Location : profile.php");
                }
            }



    }
    else{
        $_SESSION['message']="Please Upload File";
        header('Location : profile.php');
    }


}
else{
    header("Location : index.php");
}
