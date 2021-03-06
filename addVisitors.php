

<?php
include "header.php";
include "config.php";
if (isset($_POST["submit"])){
   $date_arrival=$_POST['date_arrival'];
    $staffName = $_SESSION["staffName"];
    $visitor_name=$_POST['visitor_name'];
    $designation=$_POST["designation"];
    $department=$_POST["department"];
    $no_of_people=$_POST["no_of_people"];
    $purpose_of_visiting=$_POST["purpose_of_visiting"];
    $date_departure=$_POST["date_departure"];

    $sql="INSERT INTO `visitors_register`( `time_arrival`, `time_departure`, `visitors_name`, `no_of_people`, `department`, `designation`, `purpose_of_visiting`, `approved_by`)
 VALUES ('$date_arrival','$date_departure','$visitor_name','$no_of_people','$department','$designation','$purpose_of_visiting','$staffName')";
    $result=mysqli_query($conn,$sql);
    if ($result){
        echo "<p class=' alert alert-success'>Data Submitted Successfully</p>";
    }

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
        <div class="col-2">
            <?php include "nav_card.php"; ?>
        </div>
        <div class="col-3">
            <!--            Data Entry done here-->

            <div class="card bg-light">
                <div class="card-header">
                    <img class="img-fluid" src="./assets/logo.png" width="30" height="30" alt="" srcset="">
                    <h5 class="fw-bold d-inline">Visitors Registration</h5>


                </div>
                <div class="card-body">
                    <form action="addVisitors.php" method="post">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-4">
                                    <!-- //time and selection ~how to input time and Date-->

                                    <label for="" class="form-label fw-bold">Enter Arrival Time</label>
                                    <input required name="date_arrival" type="datetime-local" class="form-control rounded-pill">

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-4">
                                    <label for="" class="form-label fw-bold">Enter Visitor Name</label>
                                    <input type="text" required class="form-control rounded-pill" name="visitor_name" id="" aria-describedby="helpId" placeholder="eg. Felex Kuria">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-4">
                                    <label for="" class="form-label fw-bold">Enter Designation</label>
                                    <input type="text" required class="form-control rounded-pill" name="designation" id="" aria-describedby="helpId" placeholder="eg. Engineer">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-4">
                                    <label for="" class="form-label fw-bold"> Department</label>
                                    <input type="text" required class="form-control rounded-pill" name="department" id="" aria-describedby="helpId" placeholder="eg. Transport or KPLC">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-6">
                                <div class="mb-4">
                                    <label for="" class="form-label fw-bold "> No Of People Visiting</label>
                                    <input type="number" required class="form-control rounded-pill" name="no_of_people" id="" aria-describedby="helpId" placeholder="eg.3">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-4">
                                    <label for="" class="form-label fw-bold ">Purpose of visiting</label>
                                    <input type="text" required class="form-control rounded-pill" name="purpose_of_visiting" id="" aria-describedby="helpId" placeholder="eg.Quarter Inspection">
                                </div>
                            </div>
                        </div>



                        <div class="mb-4">
                            <!-- //time and selection ~how to input time and Date-->

                            <label for="" class="form-label fw-bold">Enter Departure Time</label>
                            <input required name="date_departure" type="datetime-local" class="form-control rounded-pill">

                        </div>
                        <div class="mb-4">
                            <input value="Submit" type="submit" class="form-control rounded-pill btn btn-primary fw-bold" name="submit" id="" aria-describedby="helpId" placeholder="eg. 1619.23">

                        </div>


                    </form>
                </div>
            </div>
        </div>
        <div class="col-7">
            <?php

            include "config.php";

            // select query
            $sql="SELECT `id`, `time_arrival`, `time_departure`, `visitors_name`, `no_of_people`, `department`, `designation`, `purpose_of_visiting`, `approved_by` FROM `visitors_register` ";


            $result = mysqli_query($conn,$sql);

            if ($result){
                $data = mysqli_num_rows($result);

                if ($data>0){
                    echo "<div class='card card bg-light p-2' style='min-width: 100%'>";
                    echo "<div class='card-header'>";
                    echo "<div class='card-header'>
                    <img class='img-fluid' src='./assets/logo.png' width='30' height='30' >
                    <h5 class='fw-bold d-inline'> Visitor Register</h5>
                </div>";
                    echo "<table   class='table table-striped '>";
                    echo " <thead>";
                    echo "<tr>";
                    echo "<th># </th>";
                    echo "<th>Visitor Name </th>";
                    echo "<th>Arrival Time</th>";
                    echo "<th>Designation </th>";
                    echo "<th>Dept/Company </th>";
                    echo "<th>No of People</th>";
                    echo "<th>Purpose of Visit</th>";
                    echo "<th>Approved By</th>";


                    echo "</tr>";
                    echo " </thead>";

                    while ($row = mysqli_fetch_array($result)){
                        $sql="SELECT `id`, `time_arrival`, `time_departure`, `visitors_name`, `no_of_people`, `department`, `designation`, `purpose_of_visiting`, `approved_by` FROM `visitors_register` ";

                        echo "<tbody>";
                        echo "<tr>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['visitors_name']."</td>";
                        echo "<td>".$row['time_arrival']."</td>";
                        echo "<td>".$row['designation']."</td>";
                        echo "<td>".$row['department']."</td>";
                        echo "<td>".$row['no_of_people']."</td>";
                        echo "<td>".$row['purpose_of_visiting']."</td>";
                        echo "<td>".$row['approved_by']."</td>";

                        $_SESSION["visitor_id"]=$row['id'];
                        $_SESSION['arrival_time']=$row['time_arrival'];
                        $_SESSION['departure_time']=$row['time_departure'];
                        $_SESSION["visitor_name"]=$row["visitors_name"];
                        $_SESSION["designation"]=$row["designation"];
                        $_SESSION["department"]=$row["department"];
                        $_SESSION["no_of_people"]=$row['no_of_people'];
                        $_SESSION["purpose_of_visiting"]=$row['purpose_of_visiting'];




                        echo "<td>
     <div class='row mb-4'>    
           <div class='col-6'>   <a href='delete_visitor.php?id=".$row['id']." ' class='' ><i style='color: red' class='fa fa-1x fa-trash'></i></a> 
             </div><div class='col-6'>
               <a href='update_visitors.php?id=".$row['id']."' class='' ><i class='fa fa-1x fa-pencil'></i></a> 
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