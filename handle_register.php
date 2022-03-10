<?php
include "config.php";
if (isset($_POST['register'])) {
    # code...
    $staffNumber = $_POST["staff_no"];
    $staffName = $_POST["staff_name"];
    $staffEmail = $_POST["staff_email"];
    $staffPhoneNumber = $_POST["staff_phonenumber"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    if ($password == $confirmPassword) {
        # code...

        if (strlen($password) > 6) {
            # code...
        $hashedPassword = password_hash($password,PASSWORD_DEFAULT);

            $date = time();
            $sql = "INSERT INTO `staff_register`( `staff_no`, `staff_name`, `staff_email`, `staff_phoneNumber`, `hashed_password`, `timestamp`) 
            VALUES ('$staffNumber','$staffName','$staffEmail','$staffPhoneNumber','$hashedPassword','$date')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                # code...
             //   echo "success";

                session_start();
                $_SESSION["staffName"]=$staffName;
                $_SESSION["loggedIn"]=true;


                header("location:index.php");
            } else {
                echo "error occurred inserting into Db $sql" . mysqli_connect_error($conn);
            }
        } else {
            echo "error occurred: password length is less than 6 ";
        }
    } else {
        echo "error occurred: password dont match";
    }
} else {
    # code...
    echo "Error has occurred ";
}
//close Connection
mysqli_close();