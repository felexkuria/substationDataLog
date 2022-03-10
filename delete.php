<?php
include "config.php";
session_start();

$id=$_SESSION["id"];
$sql="DELETE FROM `dailylog` WHERE id=$id";
$result = mysqli_query($conn,$sql);
if ($result){
    echo "you deleted the record";
    header("location:addData.php");
}
?>
