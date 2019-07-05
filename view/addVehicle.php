<?php
/**
 * Created by PhpStorm.
 * User: jehan
 * Date: 12/10/2018
 * Time: 5:39 PM
 */
?>
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
                    <h1 class="m-0 text-dark">Create Vehicle</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#">Create Vehicle</a></li>
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
                            <h3 class="card-title brand-text  font-weight-light">Create Vehicle</h3>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal">
                                <div class="form-group text-center">
                                    <img id="img" class="profile-user-img img-fluid img-thumbnail"
                                         src="../dist/img/audi-a8-2018-3d-model-obj-blend-mtl.jpg"
                                         alt="User profile picture" style="width: 60%">
                                </div>
                                <div class="form-group">
                                    <label for="name" class="col-sm-2 control-label">Plate No</label>

                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="name"
                                               placeholder="Name">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputemail" class="col-sm-2 control-label">Brand</label>

                                    <div class="col-sm-12">
                                        <input type="email" class="form-control" id="inputemail"
                                               placeholder="Enter Brand">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="mobileNo" class="col-sm-2 control-label">Model</label>

                                    <div class="col-sm-12">
                                        <input type="number" class="form-control" id="mobileNo"
                                               placeholder="Enter Model">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label style="font-family:'Open Sans'">Manufacture Year</label>
                                    <div class="col-sm-12">
                                        <select id="manFact" class="form-control select2" style="width: 100%;">

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="mobileNo" class="col-sm-2 control-label">Register Year </label>

                                    <div class="col-sm-12">
                                        <select id="regY" class="form-control select2" style="width: 100%;">

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">Upload</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-success">Create</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
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

        //
        // $("#img").click(function () {
        //     $("input[id='my_file']").click();
        // });
        $('#man_year').datepicker({
            uiLibrary: 'bootstrap4',
            footer: true, modal: true, header: true,
            format: 'yyyy'
        });
        $('#reg_year').datepicker({
            uiLibrary: 'bootstrap4',
            footer: true, modal: true, header: true
        });

        var min = 1900,
            max = 2021,
            select = document.getElementById('manFact');

        for (var i = min; i <= max; i++) {
            var opt = document.createElement('option');
            opt.value = i;
            opt.innerHTML = i;
            select.appendChild(opt);
        }

        select.value = new Date().getFullYear();

        var m = 1900,
            mx = 2021,
            s = document.getElementById('regY');

        for (var j = m; j <= mx; j++) {
            var op = document.createElement('option');
            op.value = j;
            op.innerHTML = j;
            s.appendChild(op);
        }

        s.value = new Date().getFullYear();

    })
</script>

