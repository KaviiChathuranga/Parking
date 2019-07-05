<?php
/**
 * Created by PhpStorm.
 * User: jehan
 * Date: 12/12/2018
 * Time: 10:34 AM
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
                    <h1 class="m-0 text-dark">Manage User</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Manage User</li>
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
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Company</label>
                                        <select class="form-control select2" style="width: 100%;">
                                            <option>Select All</option>
                                            <option>A Company</option>
                                            <option>B Company</option>
                                            <option>C Company</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>User Role</label>
                                        <select class="form-control select2" style="width: 100%;">
                                            <option>Select All</option>
                                            <option>Company Admin</option>
                                            <option>Security</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-4">
                                    <!-- /input-group -->
                                    <div class="input-group mb-3">
                                        <button type="button" class="btn btn-info btn-flat btn-lg btn-block"
                                                style="border-radius: 20px 20px 20px 20px;background-color: #009cdf!important;">
                                            <i class="fas fa-search"></i>
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
                            <h3 class="card-title">User Details</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal"
                                        data-target="#addSalesRef" data-whatever="@mdo"
                                        style="background-color: #009cdf!important;"><i class="fa fa-plus"></i> Add
                                </button>
                            </div>

                            <div class="modal fade" id="addSalesRef" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="AddUser">
                                                <div class="form-group">
                                                    <label >User Name</label>
                                                    <input type="text" class="form-control" id="exampleInputName"
                                                           placeholder="Enter Name">
                                                </div>
                                                <div class="form-group">
                                                    <label >Email</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                                           placeholder="Enter Email">
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="password" class="form-control"
                                                           id="exampleInputPassword1" placeholder="Enter Password">
                                                </div>
                                                <div class="form-group">
                                                    <label>Company</label>
                                                    <select class="form-control select2" style="width: 100%;">
                                                        <option>Select Company</option>
                                                        <option>A Company</option>
                                                        <option>B Company</option>
                                                        <option>C Company</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>User Role</label>
                                                    <select class="form-control select2" style="width: 100%;">
                                                        <option>Select Role</option>
                                                        <option>Company Admin</option>
                                                        <option>Security</option>
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
                            <table id="parkingTable" class="table table-striped table-bordered nowrap"
                                   style="width:100%">
                                <thead>
                                <tr>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Company</th>
                                    <th>User Role</th>
                                    <th>Edit</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Jehan Fernando</td>
                                    <td>jehanrulz.fdo@gmail.com</td>
                                    <td>A Company</td>
                                    <td>Company Admin</td>
                                    <td><i class="fas fa-edit fa-lg" id="edit" style="color:#007bff!important"></i></td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Company</th>
                                    <th>User Role</th>
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
                                        <form id="EditUser">
                                            <div class="form-group">
                                                <label>User Name</label>
                                                <input type="text" class="form-control" id="editUserName"
                                                       placeholder="Enter Name">
                                            </div>
                                            <div class="form-group">
                                                <label >Email</label>
                                                <input type="email" class="form-control" id="editEmail"
                                                       placeholder="Enter Email">
                                            </div>
                                            <div class="form-group">
                                                <label >Password</label>
                                                <input type="password" class="form-control" id="editPass"
                                                       placeholder=" Enter password">
                                            </div>
                                            <div class="form-group">
                                                <label>Company</label>
                                                <select class="form-control select2" style="width: 100%;">
                                                    <option>Select Company</option>
                                                    <option>A Company</option>
                                                    <option>B Company</option>
                                                    <option>C Company</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>User Role</label>
                                                <select class="form-control select2" style="width: 100%;">
                                                    <option>Select Role</option>
                                                    <option>Company Admin</option>
                                                    <option>Security</option>
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

    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2();
    })
    var table = $('#parkingTable').DataTable({
        responsive: true,
    });
    new $.fn.dataTable.FixedHeader(table);
</script>


