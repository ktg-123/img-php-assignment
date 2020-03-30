
<?php
if(isset($_POST['signup_submit'])){
        require 'dbconnect.php';
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
        $mobile_no=$_POST['mobile_no'];
        $username=$_POST['username'];
        $email_id=$_POST['email_id'];
        $pass=$_POST['pass'];
        $gender=$_POST['gender'];

}


$sql="INSERT INTO kunal_user(first_name,last_name,mobile_no,username,email_id,pass,gender)
        VALUES ($first_name,$last_name,$mobile_no,$username,$email_id,$pass,$gender);";
   
   mysqli_query($conn,$sql);

    header("Location : index.php?signup=success");