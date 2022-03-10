<?php include "/xampp/htdocs/substationDataLog/header.php";
include "config.php";
if (isset($_POST["status"])){
  $kplcPowerStatus=  $_POST["power_status"];
    $id=$_SESSION["id"];
    $date=$_POST["date"];
    $staffName = $_SESSION["staffName"];

    $kplcStatus=$_POST["power_status"];
  $sql="INSERT INTO `power_status`( `date`, `staff_name`, `kplc_power_status`) VALUES ('$date','$staffName','$kplcStatus')";
 // $sql="INSERT INTO `dailylog`(`power_status`) VALUES ('$kplcPowerStatus')";
  $result=mysqli_query($conn,$sql);
  if($result){
 $_SESSION["kplcStatus"]  = $kplcPowerStatus;
      echo "Status Submitted Successfully";

  }else{
      echo "Status Not Submitted ";

  }
}
?>
<div class="row">
    <div class="col-3">
        <?php include "nav_card.php"?>

    </div>
    <div class="col-4">
        <div class="card bg-light">
            <div class="card-header">
                <h5 class="fw-bold d-inline"> KPLC Supply Status</h5>
            </div>
            <div class="card-body">
                <form action="substation_status.php" method="post">
                    <div class="mb-4">
                        <!-- //time and selection ~how to input time and Date-->

                        <label for="" class="form-label fw-bold">Enter Date</label>
                        <input required name="date" type="datetime-local" class="form-control rounded-pill">

                    </div>
                    <div class="mb-4">
                        <label for="" class="form-label fw-bold">Select KPLC Power Supply Status</label>
                        <select required class="form-control" name="power_status">
                            <option value="on">ON</option>
                            <option value="off">Off</option>

                        </select>
                    </div>

                    <div class="mb-4">
                        <input value="Submit" type="submit" class="form-control rounded-pill btn btn-primary fw-bold" name="status" id="" aria-describedby="helpId" placeholder="eg. 1619.23">

                    </div>


                </form>
            </div>
        </div>

    </div>
    <div class="col-5">

        <?php

        include "config.php";

        // select query
        $sql="SELECT `id`, `date`, `staff_name`, `kplc_power_status` FROM `power_status` ";


        $result = mysqli_query($conn,$sql);

        if ($result){
            $data = mysqli_num_rows($result);

            if ($data>0){
                echo "<div class='card card bg-light p-2' style='min-width: 100%'>";
                echo "<div class='card-header'>";
                echo "<div class='card-header'>
                    <img class='img-fluid' src='./assets/logo.png' width='30' height='30' >
                    <h5 class='fw-bold d-inline'> Power Status</h5>
                </div>";
                echo "<table   class='table table-striped '>";
                echo " <thead>";
                echo "<tr>";
                echo "<th># </th>";
                echo "<th>Date </th>";
                echo "<th>Attendant Name </th>";

                echo "<th>Kplc Status </th>";

                echo "</tr>";
                echo " </thead>";

                while ($row = mysqli_fetch_array($result)){

                    echo "<tbody>";
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['date']."</td>";
                    echo "<td>".$row['staff_name']."</td>";
                    echo "<td>".$row['kplc_power_status']."</td>" ?? "";

                    $_SESSION["id"]=$row["id"];
                    $_SESSION["date"]  = $row['date'];
                    $_SESSION["kplc_power_status"]  = $row['kplc_power_status'];



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
<!--            Data Entry done here-->
<?php include "/xampp/htdocs/substationDataLog/footer.php" ?>