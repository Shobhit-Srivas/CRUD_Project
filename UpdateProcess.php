<?php
include 'config.php';
global $con;
if (empty($_FILES['image']['name'])) {
    $filename = $_REQUEST['old-image'];
} else {
    $filename = $_FILES['image']['name'];
    $filetemp = $_FILES['image']['tmp_name'];
    move_uploaded_file($filetemp, 'upload/' . $filename);
}
$id =  $_REQUEST['id'];
$uname = $_REQUEST['uname'];
$age = $_REQUEST['age'];
$number = $_REQUEST['number'];
$sql = "update record set uname='$uname', age='$age',number='$number',image='$filename' where id=$id";
$r = mysqli_query($con, $sql) or die(mysqli_error($con));
if ($r) {
    header('location: Read.php');
} else {
    echo "Some Error";
}
mysqli_close($con);
?>