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
                    <h1 class="m-0 text-dark">History</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#">History</a></li>
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
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label style="font-family:'Open Sans'">Park</label>
                                        <select class="form-control select2" >
                                            <option selected="selected">Select All</option>
                                            <option>Park A</option>
                                            <option>Park B</option>
                                            <option>Park C</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputDate">From Date</label>
                                        <input type="date" class="form-control" id="fromDate" name="date"
                                               placeholder="Select Date">
                                        <p class="text-danger" id="error_from_date"></p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="exampleInputDate">To Date</label>
                                            <input type="date" class="form-control" id="toDate" name="date"
                                                   placeholder="Select Date">
                                            <p class="text-danger" id="error_to_date"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mt-4">
                                    <div class="input-group mb-3">
                                        <button type="button" class="btn btn-info btn-flat btn-lg btn-block"
                                                style="border-radius: 20px 20px 20px 20px;background-color: #009cdf!important;"><i class="fas fa-search"></i>
                                        </button>
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
                        <div class="card-body">
                            <!-- /.card-header -->
                            <!-- form start -->
                            <table id="parkHistory" class="table table-striped table-bordered nowrap" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Arrival Time</th>
                                    <th>Departure Time</th>
                                    <th>park</th>
                                    <th>Slot</th>
                                    <th>Total Charges</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Date</th>
                                    <th>Arrival Time</th>
                                    <th>Departure Time</th>
                                    <th>park</th>
                                    <th>Slot</th>
                                    <th>Total Charges</th>
                                </tr>
                                </tfoot>
                            </table>
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
    var table = $('#parkHistory').DataTable({
        responsive: true,
    });
    new $.fn.dataTable.FixedHeader(table);

    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2();
    })
</script>


