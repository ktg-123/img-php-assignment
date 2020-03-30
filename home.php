<?php
session_start();
include 'dbconnect.php';

if(!isset($_SESSION['username'])){
    header('location:index.php');
}

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.css"/>
<link rel="stylesheet" type="text/css" href="home.css">
    <title>
        Home Page
    </title>
</head>
<body>
<div class=main>
    <div class="id">
    Welecome <?php echo $SESION['username']?><br>
    

    <a href="logout.php">LOGOUT</a>
    </div>
    <div class="info">




    </div>
</div>
</body>
</html>