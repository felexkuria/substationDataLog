<?php
// Params t connect to Databases
$dbHost= "localhost";
$userName="root";
$password="";
$dataBase="substationDB";
//Connect DB
$conn= mysqli_connect("$dbHost","$userName","$password","$dataBase");
if($conn){
   // echo "<div class='alert-success' role='alert'><p >Server Connected Successfully</p></div>";
}else{
    echo "<p>Error Connecting  Db</p>";
}