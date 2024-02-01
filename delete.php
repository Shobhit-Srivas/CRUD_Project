<?php
include 'config.php';
global $con;
if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $sql = "select * from record where id=$id";
    $r = mysqli_query($con, $sql) or die(mysqli_error($con));
    $data = mysqli_fetch_assoc($r);
    $img = $data['image'];
    $qury = "delete from record where id=$id";
    $res = mysqli_query($con, $qury) or die(mysqli_error($con));
    if ($res) {
        header('location: Read.php');
    } else {
        echo "Some Error";
    }
    unlink('upload/' . $img);
}
mysqli_close($con);
?>