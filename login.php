<?php include "login_header.php";
?>
<div class="row">
    <div class="col-3">

    </div>
    <div class="col-6">
        <div class="card bg-light" style="width: 65%;">
            <div class="card-header">
                <img class="img-fluid" src="./assets/logo.png" width="30" height="30" alt="" srcset="">
                <h5 class="fw-bold d-inline"> Staff Login</h5>

            </div>
            <div class="card-body">
                <form action="handle_login.php" method="post">
                    <div class="mb-4">
                        <label for="" class="form-label fw-bold">Enter Staff Number</label>
                        <input type="text" required class="form-control rounded-pill" name="staff_no" id="" aria-describedby="helpId" placeholder="eg. M5/0119">
                    </div>
                    <div class="mb-4">
                        <label for="" class="form-label fw-bold ">Enter Password</label>
                        <input type="password" required  class="form-control rounded-pill" name="password" id="" aria-describedby="helpId" placeholder="password">
                    </div>
                    <div class="mb-4">
                        <input value="Log in"  type="submit" class="form-control rounded-pill btn btn-primary fw-bold" name="login" id="" aria-describedby="helpId" placeholder="eg. M5/0119">

                    </div>
                    <div class="mb-4 row">
                        <div class="col-5">
                            <a class="text-primary h6 text-decoration-underline" href="register.php">Dont have an account? </a>
                        </div>
                        <h5 class="d-inline col-2">or</h5>
                        <div class="col-5">
                            <a class=" h6 text-primary text-decoration-underline" href="reset_password.php">Forgot Password</a>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <div class="col-3">

    </div>
</div>

<?php include "/xampp/htdocs/substationDataLog/footer.php" ?>