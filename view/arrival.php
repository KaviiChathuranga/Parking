<?php
/**
 * Created by PhpStorm.
 * User: jehan
 * Date: 12/10/2018
 * Time: 7:04 AM
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
                    <h1 class="m-0 text-dark">Arrival</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#">Arrival</a></li>
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
                    <div class="card card-info">
                        <div class="card-header" style="background-color: #009cdf!important;">
                            <h3 class="card-title" style="font-family:'Open Sans'">Reserve A Park</h3>
                        </div>
                        <form role="form" action="#" method="post"
                              enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="form-group">
                                            <label for="exampleInputCategory" style="font-family:'Open Sans'">Vehicle
                                                No</label>
                                            <input type="text" class="form-control"
                                                   id="vehicleNo"
                                                   name="cat" placeholder="Vehicle No">
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="exampleInputItemName" style="font-family:'Open Sans'">Type</label>
                                                    <input type="text" disabled class="form-control"
                                                           id="type"
                                                           placeholder="Vehicle Type">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label style="font-family:'Open Sans'">Park</label>
                                                    <select class="form-control select2" style="width: 100%;">
                                                        <option selected="selected">Select Park</option>
                                                        <option>Park A</option>
                                                        <option>Park B</option>
                                                        <option>Park C</option>
                                                    </select>
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
                                    <label>Slot</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option>Select Slot</option>
                                        <option>A</option>
                                        <option>B</option>
                                        <option>C</option>
                                    </select>
                                </div>
                                <div class="card-footer">
                                    <button type="button" id="reserve_park" class="btn btn-success"
                                            style="font-family:'Open Sans'">Reserve
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
<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2();
    })
</script>
