
<?php
include "config.php";
session_start();
$staffName = $_SESSION["staffName"];
$kplcStatus=$_SESSION["kplcStatus"];
$date=$_SESSION["date"];


?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!--    local css-->
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">

    <link rel="stylesheet" href="css/styles.css">
    <!-- remote cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cdbootstrap@1.0.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cdbootstrap@1.0.0/css/cdb.min.css"/>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>KRC Substations DataLog</title>
</head>
<body>

<nav class="navbar p-2 mb-4">
    <a class="navbar-brand" href="index.php">
        <img src="assets/logo.png" width="30" height="30" class=" text-black-50" alt="Kenya Railways Logo">
        <h5 class="text-black-50 d-inline">Kenya Railways Energy</h5>
    </a>
    <ul class="nav px-5 justify-content-end">
        <li class="nav-item ">
            <div class="dropdown  d-inline border-dark border-2">
                <button class="btn  " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span><i class=" fa fa-home"></i></span> Substations <span> <i class=" fas fa-angle-down"></i></span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item text-black-50" href="#">Athi River</a>

                    <a class="dropdown-item text-black-50" href="#">Paranai</a>
                    <a class="dropdown-item text-black-50" href="#">Simba</a>
                    <a class="dropdown-item text-black-50" href="#">Voi</a>
                    <a class="dropdown-item text-black-50" href="#">Mombasa West</a>
                    <a class="dropdown-item text-black-50" href="addData.php">Mackinnon Road</a>


                </div>
            </div>
        </li>
        <li class="nav-item ">
            <a class="nav-link btn btn-primary " data-toggle="modal" data-target="#notificationModal" href="#">


                Notifications
<!--                <i class="fa fa-bell"></i><span class=" badge badge-danger">4</span>-->


                <!-- Modal -->
                <div class="modal fade" id="notificationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <div class="notification text-black-50" id="dismiss2">
                                    <div class="notification-header">
                                        <div class="icon-box"><i class="fa fa-square"></i></div>
                                        <div class="d-flex flex-column">
                                            <strong class="ml-3"><?php echo  $staffName;?></strong>
                                            <small class="ml-3 small-text"><?php echo  $date;?></small>
                                        </div>



                                    </div>
                                    <div class="notification-message" id="collapseOne">
                                        <?php echo "Mackinnon Substation"." "."power ". $kplcStatus;?>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer text-black-50">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link d-inline " href="#"><img class="rounded-circle img-fluid " style="width: 50px; height: 50px" src="./assets/Grinch.jpg" alt="profile pic of user">
                <h6 class="text-black-50 mb-4 d-inline "><?php  echo $staffName ?? "Guest";?></h6>
                            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link  fw-bold" href="logout.php">Log Out <i class=" fas fa-sign-out-alt"></i></a>
        </li>
    </ul>
</nav>
