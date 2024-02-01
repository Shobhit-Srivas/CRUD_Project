<?php
include 'config.php';
global $con;
if (isset($_REQUEST['submit'])) {
    $uname = $_REQUEST['uname'];
    $age = $_REQUEST['age'];
    $number = $_REQUEST['number'];
    $filename = $_FILES['image']['name'];
    $filetemp = $_FILES['image']['tmp_name'];
    move_uploaded_file($filetemp, 'upload/' . $filename);
    $qur = "insert into record (uname,age,number,image) values ('$uname',$age,'$number','$filename')";
    $res = mysqli_query($con, $qur) or die(mysqli_error($con));
    if ($res) {
        header('location: Read.php');
    } else {
        echo "Some Error";
    }
}
mysqli_close($con);
?>