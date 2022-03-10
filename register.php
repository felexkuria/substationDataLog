<?php include "login_header.php" ?>
<div class="row">
    <div class="col-3">

    </div>
    <div class="col-6">
        <div class="card bg-light" style="width: 65%;">
            <div class="card-header">

                <img class="img-fluid" src="./assets/logo.png" width="30" height="30" alt="" srcset="">
                <h5 class="fw-bold d-inline"> Staff Register</h5>
            </div>
            <div class="card-body">
                <form action="handle_register.php" method="post">
                    <div class="row mb-4">
                        <div class="col-6">

                            <label for="" class="form-label fw-bold">Enter Staff Number</label>
                            <input type="text" class="form-control rounded-pill" name="staff_no" id="" aria-describedby="helpId" placeholder="eg. M5/0119">

                        </div>
                        <div class="col-6">

                            <label for="" class="form-label fw-bold">Enter Full Name </label>
                            <input required type="text" class="form-control rounded-pill" name="staff_name" id="" aria-describedby="helpId" placeholder="eg.Felex Kuria">

                        </div>
                    </div>
                    <div class="mb-4 row">
                        <div class="col-6">
                            <label for="email" class="form-label fw-bold">Enter Email</label>
                            <input required type="email" class="form-control rounded-pill" name="staff_email" id="" aria-describedby="helpId" placeholder="eg.engineerfelex@gmail.com">

                        </div>
                        <div class="col-6">
                            <label for="email" class="form-label fw-bold">Enter Phone Number</label>

                            <input required type="number" class="form-control rounded-pill" name="staff_phonenumber" id="" aria-describedby="helpId" placeholder="eg.0792293923">

                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-6">
                            <label for="password" class="form-label fw-bold">Enter Password</label>

                            <input type="password" class="form-control rounded-pill" name="password" id="" aria-describedby="helpId" placeholder="password">

                        </div>
                        <div class="col-6">
                            <label for="confirmPassword" class="form-label fw-bold">Confirm Password</label>

                            <input required type="password" class="form-control rounded-pill" name="confirmPassword" id="confirmPassword" aria-describedby="helpId" placeholder=" Confirm Password">

                        </div>
                    </div>


                    <div class="mb-4">
                        <input value="Register" type="submit" class="form-control rounded-pill btn btn-primary fw-bold" name="register" id="" aria-describedby="helpId" placeholder="eg. M5/0119">
                    </div>

                </form>
            </div>
            <div class="card-footer">
                <a class="fw-bold text-center text-decoration-underline" href="login.php"> Have an Account Already? Login</a>
            </div>

        </div>
    </div>
    <div class="col-3">

    </div>
</div>

<?php include "/xampp/htdocs/substationDataLog/footer.php" ?>