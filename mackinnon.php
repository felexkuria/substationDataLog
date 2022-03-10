<?php include "/xampp/htdocs/substationDataLog/header.php" ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-3">
<?php include "nav_card.php";?>
        </div>
        <div class="col-4">
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
                            <label for="" class="form-label fw-bold">Enter Kwh Readings</label>
                            <input type="text" required class="form-control rounded-pill" name="readings_kwh" id="" aria-describedby="helpId" placeholder="eg. 3000.00">
                        </div>
                        <div class="mb-4">
                            <label for="" class="form-label fw-bold ">Enter Kvarh Readings</label>
                            <input type="password" required class="form-control rounded-pill" name="readings_kvarh" id="" aria-describedby="helpId" placeholder="eg.1672.00">
                        </div>
                        <div class="mb-4">
                            <input value="Calculate" type="submit" class="form-control rounded-pill btn btn-primary fw-bold" name="calculate" id="" aria-describedby="helpId" placeholder="eg. 1619.23">

                        </div>


                    </form>
                </div>
            </div>
        </div>
        <div class="col-5">
            <div class="card card bg-light p-2" style="width: 100%">

                    <div class="card-header">
                        <img class="img-fluid" src="./assets/logo.png" width="30" height="30" alt="" srcset="">
                        <h5 class="fw-bold d-inline">  Daily Meter Readings</h5>

                    </div>
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
                        <td>9958</td>
                        <td>596</td>
                        <td>2005/02/11</td>
                        <td class="bg-danger btn p-2 text-white">OFF</td>
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
    </div>
</div>

<?php include "/xampp/htdocs/substationDataLog/footer.php" ?>