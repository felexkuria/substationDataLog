<?php
include  "config.php";



if (isset($_POST["login"])) {
    # code...
    $staffNumber = $_POST["staff_no"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM `staff_register` WHERE  staff_no='$staffNumber'";
  $result=mysqli_query($conn,$sql);
    if ($result) {
        $data = mysqli_num_rows($result);
        if ($data >= 1) {
            //Continue
            while ($row = mysqli_fetch_array($result)) {
                $id = $row["id"];
                $staffName=$row ["staff_name"];
                $hashedPassword = $row["hashed_password"];

                //Verify Password
                if (
                    password_verify($password, $hashedPassword)
                ) {
                    session_start();
                    $_SESSION["staffName"]=$staffName;
                    $_SESSION["loggedin"] = true;
                    $_SESSION['id'] = $id;
//                    echo $staffName;
                      //  echo "success";
                    header("location:index.php");
                } else {
                    echo "Your Password Dont Match";
                }
            }
        } else {
            echo "User not in Database";
        }
    } else {
        echo "Error Excuting this Query $sql" . mysqli_error($conn);
    }}
