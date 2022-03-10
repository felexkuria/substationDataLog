<?php


include "config.php";
include "header.php";

if (isset($_POST["submit"])) {
    $staffNumber = $_POST["staff_no"];

    $sql = "SELECT * FROM users WHERE staff_no = '$staffNumber'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $data = mysqli_num_rows($result);
        if ($data >= 1) {
            //fetch data in loop
            while ($row = mysqli_fetch_array($result)) {
                $id = $row["id"];
                $staffNo = $row["staff_no"];
                $hashedPassword = $row["hashed_password"];

                if ($staffNumber == $staffNo) {
                    # code...
                    echo  $staffNo;
                    //Update User password
                  //  header("location:confirm_password.php");
                } {
                    $staffNoError = "Cannot fetch staff Number";
                }
            }


            // echo "$result";
        } else {
            $error = "Staff  does not exists";
        }
    }
}






?>
<div class="row m-2">
    <div class="col-3"></div>
    <div class="col-7">
        <div style="width: 45%" class="card">
            <h4><?php echo $error ?? " "; ?></h4>
            <div class="card-header text-primary bg-white fw-bold  "> Enter Staff Number </div>
            <div class="card-body">
                <form action="reset_password.php" method="post">

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Staff Number</span>
                        <input name="staff_no" type="text" class="form-control" required aria-describedby="basic-addon1">
                    </div>

                    <div class="">
                        <input class="btn-primary rounded-pill text-white form-control " type="submit" value="Submit Staff No" name="submit">

                    </div>

                </form>


            </div>
        </div>
    </div>
    <div class="col-2"></div>

</div>
</div>