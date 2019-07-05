<?php
/**
 * Created by PhpStorm.
 * User: jehan
 * Date: 12/10/2018
 * Time: 7:30 AM
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
                    <h1 class="m-0 text-dark">Company</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#">Company</a></li>
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
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header" style="background-color: #009cdf!important;">
                            <h3 class="card-title">Company</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Name</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Address</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Address">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 mt-5">
                                        <img id="img" class="profile-user-img img-fluid img-thumbnail"
                                             src="../dist/img/badoo.png"
                                             alt="User profile picture" style="width: 70%">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">Logo</label>
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
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="button" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>

            </div>
    </section>
</div>
<?php

require_once('footer.php');


?>

