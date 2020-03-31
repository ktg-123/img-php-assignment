<?php
$link = mysqli_connect("localhost", "root", "mathspower", "first_year");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
$sql="SELECT * from kunal_student;";
$result=mysqli_query($link,$sql);
$num=mysqli_num_rows($result);
if($num>0){
    while($row=mysqli_fetch_assoc($result)){
        echo $row['sname']."<br>";
    }
}
mysqli_close($link);
?>