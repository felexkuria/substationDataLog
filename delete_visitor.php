<?php

include "config.php";
session_start();

$id = $_SESSION["visitor_id"];

$sql = "DELETE FROM `visitors_register` WHERE id=$id";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "you deleted the record";
    header("location:addVisitors.php");
}

