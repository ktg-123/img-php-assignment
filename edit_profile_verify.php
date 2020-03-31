<?php
session_start();
include 'dbconnect.php';
if(isset($_POST['edit'])){
    $gender=$_POST['gender'];
    $mobile_no=$_POST['mobile_no'];
    $email_id=$_POST['email_id'];
    $username=$_SESSION['username'];
    $pass=$_POST['pass'];
    $pass_cnf=$_POST['pass_cnf'];
    $phn="/^(?:(?:\+|0{0,2})91(\s*[\ -]\s*)?|[0]?)?[789]\d{9}|(\d[ -]?){10}\d$/";
    $em="/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/";
    $passtest="/^[A-Za-z0-9@_\.]{1,}$/";
    $uid="/^[A-Za-z0-9@_\.]{1,}$/";
    $first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$first="/^[A-Za-z]{1,}$/";
$last="/^[A-Za-z]{1,}$/";
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
if(!preg_match($em,$email_id)||!preg_match($phn,$mobile_no)||!preg_match($passtest,$pass)||!preg_match($uid,$username)||!preg_match($first,$first_name)||!preg_match($last,$last_name)){

    header("Location:edit_profile.php");
}

 
    $avatar=$_FILES['avatar'];
    $avatar_size=$avatar['size'];
    $avatar_name=$avatar['name'];
    $avatar_tmp_name=$avatar['tmp_name'];
    $avatar_type=$avatar['type'];
        if($avatar_type=="image/jpg"||$avatar_type=="image/jpeg"||$avatar_type=="image/png"){
            if($avatar_size<=2000000){

                move_uploaded_file($avatar_tmp_name,"avatar/".$avatar_name);
                
                $first_name=test_input($first_name);

                $last_name=test_input($last_name);    

                $mobile_no=test_input($mobile_no);

                $email_id=test_input($email_id);       

                $pass=test_input($pass);

                $username=test_input($username);

                $pass=password_hash($pass,PASSWORD_BCRYPT);
                $sql="UPDATE kunal_user set first_name='$first_name',last_name='$last_name',avatar='$avatar_name', mobile_no='$mobile_no',gender='$gender',
                email_id='$email_id', pass='$pass' where username='$username' ;";
               //echo $sql; die();
                $result=mysqli_query($conn,$sql);
                if($result){
                    header("Location:home.php");
                }
                else{
                    header("Location:edit_profile.php");
                }
            }
            else{
                header("Location:edit_profile.php");
            }
        }
        else{
            header("Location:edit_profile.php");
        }
}
else{
    header("Location:edit_profile.php");
}