<?php
/**
 * Created by PhpStorm.
 * User: jehan
 * Date: 12/11/2018
 * Time: 6:06 PM
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: jehan
 * Date: 9/29/2018
 * Time: 6:24 PM
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
                    <h1 class="m-0 text-dark">Manage Company</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Manage Company</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Company Details</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal"
                                        data-target="#addSalesRef" data-whatever="@mdo" style="background-color: #009cdf!important;"><i class="fa fa-plus"></i> Add
                                </button>
                            </div>

                            <div class="modal fade" id="addSalesRef" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Company</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="AddCompany">
                                                <div class="text-center" style="padding-bottom: 10px">
                                                    <img class="profile-user-img img-fluid img-circle"
                                                         src="../dist/img/badoo.png"
                                                         alt="User profile picture">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Name</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                                                </div>
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Address</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Address">
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
                            <table id="parkingTable" class="table table-striped table-bordered nowrap" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Address</th>
                                    <th>Edit</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Don't Know Yet</td>
                                    <td>bla bla bla bla bla bla</td>
                                    <td>Colombo 03</td>
                                    <td><i class="fas fa-edit fa-lg" id="edit" style="color:#007bff!important"></i></td>
                                </tr>
                                <tr>
                                    <td>Don't Know Yet</td>
                                    <td>bla bla bla bla bla bla</td>
                                    <td>Colombo 03</span></td>
                                    <td><i class="fas fa-edit fa-lg" id="edit" style="color:#007bff!important"></i></td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Status</th>
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
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Company</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="EditCompany">
                                            <div class="text-center" style="padding-bottom: 10px">
                                                <img class="profile-user-img img-fluid img-circle"
                                                     src="../dist/img/badoo.png"
                                                     alt="User profile picture">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Name</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Address</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Address">
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
    var table = $('#parkingTable').DataTable({
        responsive: true,
    });
    new $.fn.dataTable.FixedHeader(table);
</script>

