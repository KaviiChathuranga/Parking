<?php
/**
 * Created by PhpStorm.
 * User: jehan
 * Date: 12/10/2018
 * Time: 4:51 PM
 */
?>
<?php

require_once('head.php');
require_once('header.php');
require_once('sidebar.php');

?>
<link href="../dist/css/custom/switchButton.css" rel="stylesheet">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Manage Slot</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Manage Slot</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label style="font-family:'Open Sans'">Park</label>
                                        <select class="form-control select2" >
                                            <option selected="selected">Select Park</option>
                                            <option>Park A</option>
                                            <option>Park B</option>
                                            <option>Park C</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-4">
                                    <!-- /input-group -->
                                    <div class="input-group mb-3">
                                        <button type="button" class="btn btn-info btn-flat btn-block"
                                                style="border-radius: 20px 20px 20px 20px;background-color: #009cdf!important;">View</i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- /input-group -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Slot Details</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal"
                                        data-target="#addSalesRef" data-whatever="@mdo"><i class="fa fa-plus"></i> Add
                                </button>
                            </div>

                            <div class="modal fade" id="addSalesRef" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Slot</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="AddSlotForm">
                                                <div class="form-group">
                                                    <label for="exampleInputCategory">Name</label>
                                                    <input type="text" class="form-control"
                                                           id="vehicleNo"
                                                           name="cat" placeholder="Vehicle No">
                                                </div>
                                                <div class="form-group">
                                                    <label>Park</label>
                                                    <select class="form-control">
                                                        <option>Select Park</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <select class="form-control">
                                                        <option>Select Status</option>
                                                        <option>Available</option>
                                                        <option>Occupied</option>
                                                        <option>Disabled</option>
                                                    </select>
                                                </div>
                                            </form>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                            </button>
                                            <button type="button" class="btn btn-primary" id="user_save_btn">Create
                                            </button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="slotTable" class="table table-striped table-bordered nowrap" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Park</th>
                                    <th>Slot</th>
                                    <th>Edit</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>A</td>
                                    <td>Park A</td>
                                    <td>A</td>
                                    <td><i class="fas fa-edit fa-lg" id="edit" style="color:#007bff!important"></i></td>
                                </tr>
                                <tr>
                                    <td>A</td>
                                    <td>Park </td>
                                    <td>B</td>
                                    <td><i class="fas fa-edit fa-lg" id="edit" style="color:#007bff!important"></i></td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Park</th>
                                    <th>Slot</th>
                                    <th>Edit</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="modal fade" id="editSalesRef" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Slot</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="editSlotForm">
                                            <div class="form-group">
                                                <label for="exampleInputCategory">Name</label>
                                                <input type="text" class="form-control"
                                                       id="vehicleNo"
                                                       name="cat" placeholder="Vehicle No">
                                            </div>
                                            <div class="form-group">
                                                <label>Park</label>
                                                <select class="form-control">
                                                    <option>Select Park</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-control">
                                                    <option>Select Status</option>
                                                    <option>Available</option>
                                                    <option>Occupied</option>
                                                    <option>Disabled</option>
                                                </select>
                                            </div>
                                        </form>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                        </button>
                                        <button type="button" id="user_update_btn" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
</div>
<?php

require_once('footer.php');


?>
<script>
    var table = $('#slotTable').DataTable({
        responsive: true,
    });
    new $.fn.dataTable.FixedHeader(table);
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2();
    })
</script>

