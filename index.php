<?php include "header.php";

 $id=$_SESSION["id"];
 $date=$_SESSION["date"];
$cb =$_SESSION['cabinetId'] ;
$kwh =$_SESSION["readings_kwh"] ;
 $kvarh=$_SESSION["readings_kvarh"] ;
 $kplcStatus=$_SESSION["kplcStatus"];
$visitor_id=$_SESSION["visitor_id"];

$visitor_name=$_SESSION["visitor_name"];
$designation=$_SESSION["designation"];
$department=$_SESSION["department"];
$no_of_people=$_SESSION["no_of_people"];
$purpose_of_visiting=$_SESSION["purpose_of_visiting"];
function bgDanger(){
    $kplcStatus=$_SESSION["kplcStatus"];

    if ($kplcStatus==="off"){
        echo "bg-danger";
    } else{
        echo "bg-success";

    }
}
function bgColor(){
    $kplcStatus=$_SESSION["kplcStatus"];

    if ($kplcStatus==="off"){
        echo "red";
    } else{
        echo "green";

    }
}
?>


<div class="container-fluid ">
    <div class="row ">
        <div class="col-3">
            <div class="card d-flex">
                <div class="card-header">
                    <h5>Substations</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-black-50 fw-bold"><a href="addData.php">Mackinnon Road </a>
<!---->
                        <li class="list-group-item text-black-50 fw-bold"><a href="#">Mombasa West</a></li>

                        <li class="list-group-item text-black-50 fw-bold"><a href="#">Voi</a>
                        <li class="list-group-item text-black-50 fw-bold"><a href="#">Simba</a>
                        <li class="list-group-item text-black-50 fw-bold"><a href="#">Paranai</a>
                        <li class="list-group-item text-black-50 fw-bold"><a href="#">Athi River</a>



                    </ul>
                </div>
            </div>



        </div>
        <div class="col-6 ">
            <div class="card card bg-light p-2" style="min-width: 100%">
                <table class="table  table-striped " style="min-width: 100%">
                    <thead>
                        <tr>
                            <th>Substation</th>
                            <th>Power(Kvarh)</th>
                            <th>Power (Kwh)</th>
                            <th data-type="date" data-format="YYYY/MM/DD">Period</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mackinnon Road </td>
                            <td><?php echo $kvarh ??"";?></td>
                            <td><?php echo $kwh??""; ?></td>
                            <td><?php echo $date??"" ;?></td>
                            <td class=" <?php bgDanger();?> text-white text-capitalize fw-bold btn p-2 text-white"><?php echo $kplcStatus??"" ;?></td>
                        </tr>
                        <tr>
                            <td>Athi River </td>
                            <td>9958</td>
                            <td>596</td>
                            <td>2005/02/11</td>
                            <td class="bg-success btn text-white p-2">On</td>
                        </tr>
                        <tr>
                            <td>Voi</td>
                            <td>9958</td>
                            <td>596</td>
                            <td>2005/02/11</td>
                            <td class="bg-success btn text-white p-2">On</td>
                        </tr>
                        <tr>
                            <td>Mombasa West </td>
                            <td>9958</td>
                            <td>596</td>
                            <td>2005/02/11</td>
                            <td class="bg-success btn text-white p-2">On</td>
                        </tr>
                        <tr>
                            <td>Simba </td>
                            <td>9958</td>
                            <td>596</td>
                            <td>2005/02/11</td>
                            <td class="bg-success btn text-white p-2">On</td>
                        </tr>

                        <tr>
                            <td>Paranai </td>
                            <td>9958</td>
                            <td>596</td>
                            <td>2005/02/11</td>
                            <td class="bg-success btn text-white p-2">On</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-3 bg-light">
            <div class="card px-2 bg-light">


                <div class="card-body">
                    <h4 class="card-title fw-bold d-inline"> Substations Status</h4>
                    <div class="row justify-content-center ">
                        <div class="col-3 p-2">
                            <p class="card-text fw-bold">Kplc On<span> <i style="color: green;" class=" fa fa-cogs"></i></span></p>
                        </div>
                        <div class="col-3 p-2">
                            <p class="card-text fw-bold"> Kplc Off <span> <i style="color: red;" class=" fa fa-cogs"></i></span></p>
                        </div>

                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item text-white text-capitalize <?php bgDanger();   ?>">Mackinnon Road <span> <i style="color: <?php bgColor();?>;"  class=" fa fa-cogs"></i></span> </li>
                    <li class="list-group-item text-white text-capitalize bg-success">Athi River <span> <i style="color: green;"  class=" fa fa-cogs"></i></span> </li>
                    <li class="list-group-item text-white text-capitalize bg-success">Voi<span> <i style="color: green;"  class=" fa fa-cogs"></i></span> </li>
                    <li class="list-group-item text-white text-capitalize bg-success">Paranai <span> <i style="color: green;"  class=" fa fa-cogs"></i></span> </li>
                    <li class="list-group-item text-white text-capitalize bg-success">Simba <span> <i style="color: green;"  class=" fa fa-cogs"></i></span> </li>

                    <li class="list-group-item text-white text-capitalize bg-success">Mombasa West <span> <i style="color: green;"  class=" fa fa-cogs"></i></span> </li>

                </ul>
            </div>

        </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">

            </div>
            <div class="col-3"></div>

        </div>
    </div>
</div>

</div>
</div>

<!-- Optional JavaScript -->


<?php include "footer.php" ?>