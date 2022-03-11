<?php
include "header.php";
include "config.php";
$visitor_id=$_SESSION["visitor_id"];

$visitor_name=$_SESSION["visitor_name"];
$designation=$_SESSION["designation"];
$department=$_SESSION["department"];
$no_of_people=$_SESSION["no_of_people"];
$purpose_of_visiting=$_SESSION["purpose_of_visiting"];
if (isset($_POST['update']) and !empty($visitor_id)){
    $up_date_arrival=$_POST['date_arrival'];
    $up_staffName = $_SESSION["staffName"];
    $up_visitor_name=$_POST['visitor_name'];
    $up_designation=$_POST["designation"];
    $up_department=$_POST["department"];
    $up_no_of_people=$_POST["no_of_people"];
    $up_purpose_of_visiting=$_POST["purpose_of_visiting"];
    $up_date_departure=$_POST["date_departure"];
    $up_sql="UPDATE `visitors_register` SET `time_arrival`='$up_date_arrival',`time_departure`='$up_date_departure',`visitors_name`='$up_visitor_name',`no_of_people`='$up_no_of_people',`department`='$up_date_departure',`designation`='$up_designation',`purpose_of_visiting`='$up_purpose_of_visiting' WHERE id=$visitor_id";
    $result = mysqli_query($conn,$up_sql);
    if ($result){
         echo "you updated the record";

    }else{
         echo "error updating record";

    }

}else{
    echo"error";
}





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
                    <h5 class="fw-bold d-inline"> Meter Readings</h5>


                </div>
                <div class="card-body">
                    <form action="update_visitors.php" method="post">
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
                                    <input value="<?php echo $visitor_name;?>" type="text" required class="form-control rounded-pill" name="visitor_name" id="" aria-describedby="helpId" placeholder="eg. Felex Kuria">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-4">
                                    <label for="" class="form-label fw-bold">Enter Designation</label>
                                    <input value="<?php echo  $designation;?>" type="text" required class="form-control rounded-pill" name="designation" id="" aria-describedby="helpId" placeholder="eg. Engineer">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-4">
                                    <label for="" class="form-label fw-bold"> Department</label>
                                    <input value="<?php echo $department;?>" type="text" required class="form-control rounded-pill" name="department" id="" aria-describedby="helpId" placeholder="eg. Transport or KPLC">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-6">
                                <div class="mb-4">
                                    <label for="" class="form-label fw-bold "> No Of People Visiting</label>
                                    <input value="<?php echo $no_of_people;?>" type="number" required class="form-control rounded-pill" name="no_of_people" id="" aria-describedby="helpId" placeholder="eg.3">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-4">
                                    <label for="" class="form-label fw-bold ">Purpose of visiting</label>
                                    <input value="<?php echo $purpose_of_visiting; ?>" type="text" required class="form-control rounded-pill" name="purpose_of_visiting" id="" aria-describedby="helpId" placeholder="eg.Quarter Inspection">
                                </div>
                            </div>
                        </div>



                        <div class="mb-4">
                            <!-- //time and selection ~how to input time and Date-->

                            <label for="" class="form-label fw-bold">Enter Departure Time</label>
                            <input required name="date_departure" type="datetime-local" class="form-control rounded-pill">

                        </div>
                        <div class="mb-4">
                            <input value="Update" type="submit" class="form-control rounded-pill btn btn-primary fw-bold" name="update" id="" aria-describedby="helpId" placeholder="eg. 1619.23">

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