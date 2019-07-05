<?php
/**
 * Created by PhpStorm.
 * User: jehan
 * Date: 12/10/2018
 * Time: 7:29 AM
 */
?>
<?php

require_once('head.php');
require_once('header.php');
require_once('sidebar.php');

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Departure</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#">Departure</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Content Add To Lorry -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header" style="background-color: #009cdf!important;">
                            <h3 class="card-title">Departure</h3>
                        </div>
                        <form role="form" action="#" method="post"
                              enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="form-group">
                                            <label for="exampleInputCategory">Vehicle No</label>
                                            <input type="text" class="form-control"
                                                   id="vehicleNo"
                                                   name="cat" placeholder="Vehicle No">
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="exampleInputItemName"">Vehicle Type</label>
                                                    <input type="text" disabled class="form-control"
                                                           id="type"
                                                           placeholder="Vehicle Type">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="exampleInputItemName"">Arrived Time</label>
                                                    <input type="text" disabled class="form-control"
                                                           id="type"
                                                           placeholder="Arrived Time">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 mt-5">
                                        <img id="img" class="profile-user-img img-fluid img-thumbnail"
                                             src="../dist/img/audi-a8-2018-3d-model-obj-blend-mtl.jpg"
                                             alt="User profile picture" style="width: 70%">
                                        <input type="file" id="my_file" style="display: none;"/>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputItemName"">Departure Time</label>
                                    <input type="text" disabled class="form-control"
                                           id="type"
                                           placeholder="Departure Time">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputItemName"">Park Time</label>
                                    <input type="text" disabled class="form-control"
                                           id="type"
                                           placeholder="Park Time">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputItemName"">Charges</label>
                                    <input type="number" value="0.0" disabled class="form-control"
                                           id="type"
                                           placeholder="Charges">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputItemName"">Payment</label>
                                    <input type="number" value="0.0"  class="form-control"
                                           id="type"
                                           >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputItemName"">Balance</label>
                                    <input type="number"  value="0.0" readonly class="form-control"
                                           id="type"
                                           >
                                </div>
                                <div class="card-footer">
                                    <button type="button" id="reserve_park" class="btn btn-success">Done
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
    </section>
</div>
<?php

require_once('footer.php');


?>

