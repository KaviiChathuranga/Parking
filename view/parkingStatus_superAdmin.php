<?php
/**
 * Created by PhpStorm.
 * User: jehan
 * Date: 12/13/2018
 * Time: 10:18 AM
 */
?>

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
<style>
    .table td,.table th{
        border-top: none;
    }
    /*Extra small devices (portrait phones, less than 576px)*/
    @media (max-width: 575.98px) {
        .container-fluid ul li{
            width:50%;
            padding-left: 7%;
            padding-right: 7%;
        }
    }

    /*!*Small devices (landscape phones, less than 768px)*!*/
    /*@media (max-width: 767.98px) {*/
    /*.container-fluid ul li{*/
    /*width:70%;*/
    /*}*/
    /*}*/

    /*!*Medium devices (tablets, less than 992px)*!*/
    /*@media (max-width: 991.98px) {*/
    /*.container-fluid ul li{*/
    /*width:60%;*/
    /*}*/
    /*}*/

    /*!*Large devices (desktops, less than 1200px)*!*/
    /*@media (max-width: 1199.98px) {*/

    /*}*/
    /*!*Extra large devices (large desktops, 1200px and up)*!*/
    /*@media (min-width: 1200px) {*/

    /*}*/

</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Parking Status</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#">Parking Status</a></li>
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
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Company</label>
                                        <select class="form-control select2" style="width: 100%;">
                                            <option>Select Company</option>
                                            <option>A Company</option>
                                            <option>B Company</option>
                                            <option>C Company</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label style="font-family:'Open Sans'">Park</label>
                                        <select class="form-control select2" >
                                            <option>Select Park</option>
                                            <option>Park A</option>
                                            <option>Park B</option>
                                            <option>Park C</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-4">
                                    <div class="input-group mb-3">
                                        <button type="button" class="btn btn-info btn-flat btn-lg btn-block"
                                                style="border-radius: 20px 20px 20px 20px;background-color: #009cdf!important;" id="checkStatusBtn"><i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="status">
                                <div class="col-md-12">
                                    <div class="card card-success mt-2">
                                        <div class="card-header">
                                            <h4 class="card-title text-center">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" style="color: white">
                                                    This Park is Available
                                                </a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /input-group -->

                            <!-- /input-group -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <ul class="users-list clearfix">

                                <li>
                                    <div class="card card-warning">
                                        <div class="card-body text-center">
                                            <img
                                                src="../dist/img/014-parking-5.png"
                                                alt="User profile picture" style="width: 60%">
                                            <p style="font-size: 20px;margin-bottom: 0px">1</p>

                                        </div>

                                        <!-- /.card-body -->
                                    </div>
                                </li>
                                <li>
                                    <div class="card card-warning">
                                        <div class="card-body text-center">
                                            <img
                                                src="../dist/img/014-parking-5.png"
                                                alt="User profile picture" style="width: 60%">
                                            <p style="font-size: 20px;margin-bottom: 0px">2</p>

                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </li>
                                <li>

                                    <div class="card card-warning">
                                        <div class="card-body text-center">
                                            <img
                                                src="../dist/img/020-parking-meter.png"
                                                alt="User profile picture" style="width: 60%">
                                            <p class="text-center" style="font-size: 20px;margin-bottom: 0px">KL-5150</p>

                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </li>
                                <li>
                                    <div class="card card-warning">
                                        <div class="card-body text-center">
                                            <img
                                                src="../dist/img/014-parking-5.png"
                                                alt="User profile picture" style="width: 60%">
                                            <p style="font-size: 20px;margin-bottom: 0px">4</p>

                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </li>
                                <li>
                                    <div class="card card-warning">
                                        <div class="card-body text-center">
                                            <img
                                                src="../dist/img/014-parking-5.png"
                                                alt="User profile picture" style="width: 60%">
                                            <p style="font-size: 20px;margin-bottom: 0px">5</p>

                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </li>
                                <li>
                                    <div class="card card-warning">
                                        <div class="card-body text-center">
                                            <img
                                                src="../dist/img/014-parking-5.png"
                                                alt="User profile picture" style="width: 60%">
                                            <p style="font-size: 20px;margin-bottom: 0px">6</p>

                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </li>
                                <li>
                                    <div class="card card-warning">
                                        <div class="card-body text-center">
                                            <img
                                                src="../dist/img/014-parking-5.png"
                                                alt="User profile picture" style="width: 60%">
                                            <p style="font-size: 20px;margin-bottom: 0px">7</p>

                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </li>
                                <li>
                                    <div class="card card-warning">
                                        <div class="card-body text-center">
                                            <img
                                                src="../dist/img/014-parking-5.png"
                                                alt="User profile picture" style="width: 60%">
                                            <p style="font-size: 20px;margin-bottom: 0px">8</p>

                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </li>
                                <li>
                                    <div class="card card-warning">
                                        <div class="card-body text-center">
                                            <img
                                                src="../dist/img/014-parking-5.png"
                                                alt="User profile picture" style="width: 60%">
                                            <p style="font-size: 20px;margin-bottom: 0px">9</p>

                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </li>
                                <li>
                                    <div class="card card-warning">
                                        <div class="card-body text-center">
                                            <img
                                                src="../dist/img/020-parking-meter.png"
                                                alt="User profile picture" style="width: 60%">
                                            <p class="text-center" style="font-size: 20px;margin-bottom: 0px">KL-5150</p>

                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </li>
                                <li>
                                    <div class="card card-warning">
                                        <div class="card-body text-center">
                                            <img
                                                src="../dist/img/020-parking-meter.png"
                                                alt="User profile picture" style="width: 60%">
                                            <p class="text-center" style="font-size: 20px;margin-bottom: 0px">KL-5150</p>

                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </li>

                                <li>
                                    <div class="card card-warning">
                                        <div class="card-body text-center">
                                            <img
                                                src="../dist/img/020-parking-meter.png"
                                                alt="User profile picture" style="width: 60%">
                                            <p class="text-center" style="font-size: 20px;margin-bottom: 0px">KL-5150</p>

                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </li>
                                <li>
                                    <div class="card card-warning">
                                        <div class="card-body text-center">
                                            <img
                                                src="../dist/img/014-parking-5.png"
                                                alt="User profile picture" style="width: 60%">
                                            <p style="font-size: 20px;margin-bottom: 0px">13</p>

                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </li>
                                <li>
                                    <div class="card card-warning">
                                        <div class="card-body text-center">
                                            <img
                                                src="../dist/img/014-parking-5.png"
                                                alt="User profile picture" style="width: 60%">
                                            <p style="font-size: 20px;margin-bottom: 0px">14</p>

                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </li>
                                <li>
                                    <div class="card card-warning">
                                        <div class="card-body text-center">
                                            <img
                                                src="../dist/img/014-parking-5.png"
                                                alt="User profile picture" style="width: 60%">
                                            <p style="font-size: 20px;margin-bottom: 0px">15</p>

                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </li>

                                <li>
                                    <div class="card card-warning">
                                        <div class="card-body text-center">
                                            <img
                                                src="../dist/img/014-parking-5.png"
                                                alt="User profile picture" style="width: 60%">
                                            <p style="font-size: 20px;margin-bottom: 0px">16</p>

                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </li>
                            </ul>
                            <!-- /.users-list -->
                        </div>
                    </div>
                </div>
            </div>

    </section>
</div>
<?php

require_once('footer.php');


?>
<script>
    var table = $('#example').DataTable({
        responsive: true,
    });
    new $.fn.dataTable.FixedHeader(table);

    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2();
    })
    $('#checkStatusBtn').on('click',function () {

    });

</script>


