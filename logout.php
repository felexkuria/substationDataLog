<?php
session_start();
$_SESSION= ["loggedOut"] ==true;

header("location:login.php");
exit();
