<?php
include "header.php";
include "config.php";
if (isset($_POST["calculate"])){
    $date=$_POST["date"];
    $cabinet_no=$_POST["cabinet_no"];
    $reading_kwh=$_POST["readings_kwh"];
    $reading_kvarh=$_POST["readings_kvarh"];
    $attendant_name=$_SESSION['staffName'];
//    echo $reading_kvarh.$reading_kwh.$cabinet_no.$date.$attendant_name;
    $sql="INSERT INTO `dailylog`( `attendantName`, `date`, `cabinetId`, `readings_kwh`, `readings_kvarh`) VALUES ('$attendant_name','$date','$cabinet_no','$reading_kwh','$reading_kvarh')";
   $result=mysqli_query($conn,$sql);

}
//drop dropdown for cabinet N1-N9
//create dropdown for the cabinet
//convert to kwh and kvarh
//store data in daily log
// input person on duty using sessions
mysqli_close($conn);
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-3">
            <?php include "nav_card.php"; ?>
        </div>
        <div class="col-3">
<!--            Data Entry done here-->
            <div class="card bg-light">
                <div class="card-header">
                    <img class="img-fluid" src="./assets/logo.png" width="30" height="30" alt="" srcset="">
                    <h5 class="fw-bold d-inline"> Meter Readings</h5>


                </div>
                <div class="card-body">
                    <form action="addData.php" method="post">
                        <div class="mb-4">
                            <!-- //time and selection ~how to input time and Date-->

                            <label for="" class="form-label fw-bold">Enter Date</label>
                            <input required name="date" type="datetime-local" class="form-control rounded-pill">

                        </div>
                        <div class="mb-4">
                            <label for="" class="form-label fw-bold">Enter Cabinet No</label>

                            <select required class="form-control" name="cabinet_no">
                                <option value="N1">N1</option>
                                <option value="N2">N2</option>
                                <option value="N3">N3</option>
                                <option value="N6">N6</option>
                                <option value="N7">N7</option>
                                <option value="N9">N9</option>
                                <option value="N10">N10</option>

                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="" class="form-label fw-bold">Enter Kwh Readings</label>
                            <input type="text" required class="form-control rounded-pill" name="readings_kwh" id="" aria-describedby="helpId" placeholder="eg. 3000.00">
                        </div>
                        <div class="mb-4">
                            <label for="" class="form-label fw-bold ">Enter Kvarh Readings</label>
                            <input type="text" required class="form-control rounded-pill" name="readings_kvarh" id="" aria-describedby="helpId" placeholder="eg.1672.00">
                        </div>
                        <div class="mb-4">
                            <input value="Calculate" type="submit" class="form-control rounded-pill btn btn-primary fw-bold" name="calculate" id="" aria-describedby="helpId" placeholder="eg. 1619.23">

                        </div>


                    </form>
                </div>
            </div>
        </div>
        <div class="col-6">
                <?php

                include "config.php";

                // select query
                $sql="SELECT `id`, `attendantName`, `date`, `cabinetId`, `readings_kwh`, `readings_kvarh` FROM `dailylog`";


                $result = mysqli_query($conn,$sql);

                if ($result){
                    $data = mysqli_num_rows($result);

                    if ($data>0){
                        echo "<div class='card card bg-light p-2' style='min-width: 100%'>";
                        echo "<div class='card-header'>";
                        echo "<div class='card-header'>
                    <img class='img-fluid' src='./assets/logo.png' width='30' height='30' >
                    <h5 class='fw-bold d-inline'> Daily Meter Readings</h5>
                </div>";
                        echo "<table   class='table table-striped '>";
                        echo " <thead>";
                        echo "<tr>";
                        echo "<th># </th>";
                        echo "<th>Attendant Name </th>";
                        echo "<th>Date </th>";
                        echo "<th>Cabinet Id </th>";
                        echo "<th>Readings Kwh </th>";
                        echo "<th>Readings Kvarh</th>";

                        echo "</tr>";
                        echo " </thead>";

                        while ($row = mysqli_fetch_array($result)){

                            echo "<tbody>";
                            echo "<tr>";
                            echo "<td>".$row['id']."</td>";
                            echo "<td>".$row['attendantName']."</td>";
                            echo "<td>".$row['date']."</td>";
                            echo "<td>".$row['cabinetId']."</td>";
                            echo "<td>".$row['readings_kwh']."</td>";
                            echo "<td>".$row['readings_kvarh']."</td>";

                            $_SESSION["id"]=$row["id"];
                           $_SESSION["date"]  = $row['date'];
                           $_SESSION['cabinetId']  = $row['cabinetId'];
                           $_SESSION["readings_kwh"]  = $row['readings_kwh'];
                           $_SESSION["readings_kvarh"]  = $row['readings_kvarh'];


                            echo "<td>
     <div class='row mb-4'>    
           <div class='col-6'>   <a href='delete.php?id=".$row['id']." ' class='' ><i style='color: red' class='fa fa-1x fa-trash'></i></a> 
             </div><div class='col-6'>
               <a href='update.php?id=".$row['id']."' class='' ><i class='fa fa-1x fa-pencil'></i></a> 
</div>
</div>
                 </td>";
                            echo "<tr>";
                            echo "</tbody>";
                        }

                        echo "</table>";
                        echo "</div>";
                        echo "</div>";






                    }else{
                        echo "<em class='alert alert-info'>No data found</em>";
                    }






                }else{
                    echo "<p class='alert alert-warning'>error executing your query $sql</p>".mysqli_error($conn);
                }
                mysqli_close($conn);
                                ?>
                    </div>

    </div>
    <?php include "footer.php" ?>