<?php
/**
 * Created by PhpStorm.
 * User: jehan
 * Date: 9/29/2018
 * Time: 4:26 AM
 */
?>
<style>
    #admin {
        display: none;
    }

    #super {
        display: none;
    }

    #security {
        display: none;
    }

    #driver {
        display: none;
    }
</style>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link" style="background-color: #009cdf!important;">
        <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-rounded elevation-6"
             style="opacity: .8">
        <span class="brand-text  font-weight-light" style="color: white">Company Logo</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../dist/img/sheriff.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">JEHAN FERNANDO</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="dashboard.php" class="nav-link active bg-info"
                       style="background-color: #009cdf!important;">
                        <i class="nav-icon fa fa-home"></i>
                        <p>
                            Dashboard

                        </p>
                    </a>
                </li>
                <div id="security">
                    <li class="nav-item has-treeview">
                        <a href="arrival.php" class="nav-link">
                            <i class="fas fa-car-side"></i>

                            <p>
                                Arrival
                            </p>
                        </a>
                    </li>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="departure.php" class="nav-link">
                            <i class="fas fa-car"></i>

                            <p>
                                Departure
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="fas fa-parking"></i>
                            <p>
                                Parking Status
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="parkA.php" class="nav-link">
                                    <i class="far fa-circle"></i>
                                    <p>Park A</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="history.php" class="nav-link">
                            <i class="fas fa-history"></i>
                            <p>
                                History
                                <!-- <span class="right badge badge-danger">New</span>-->
                            </p>
                        </a>
                    </li>
<!--                    <li class="nav-item">-->
<!--                        <a href="#" class="nav-link">-->
<!--                            <i class="fas fa-cog"></i>-->
<!--                            <p>-->
<!--                                Settings-->
<!--                            </p>-->
<!--                        </a>-->
<!--                    </li>-->
                </div>
                <!--                Company Admin-->
                <div id="admin">
                    <li class="nav-item">
                        <a href="company.php" class="nav-link">
                            <i class="fas fa-building"></i>
                            <p>
                                Company
                                <!-- <span class="right badge badge-danger">New</span>-->
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="mangeAllowVehicle.php" class="nav-link">
                            <i class="fas fa-car"></i>
                            <p>
                                Allowed Vehicles
                                <!-- <span class="right badge badge-danger">New</span>-->
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="fas fa-parking"></i>
                            <p>
                                Parking Status
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="parkA.php" class="nav-link">
                                    <i class="far fa-circle"></i>
                                    <p>Park A</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="managePark.php" class="nav-link">
                            <i class="fas fa-parking"></i>
                            <p>
                                Manage Park
                                <!-- <span class="right badge badge-danger">New</span>-->
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="manageSlot.php" class="nav-link">
                            <i class="far fa-square"></i>
                            <p>
                                Manage Slot
                                <!-- <span class="right badge badge-danger">New</span>-->
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="manageUser.php" class="nav-link">
                            <i class="fas fa-user"></i>
                            <p>
                                Manage Users
                                <!-- <span class="right badge badge-danger">New</span>-->
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="manageCharges.php" class="nav-link">
                            <i class="far fa-money-bill-alt"></i>
                            <p>
                                Manage Charges
                                <!-- <span class="right badge badge-danger">New</span>-->
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="history.php" class="nav-link">
                            <i class="fas fa-history"></i>
                            <p>
                                Park History
                                <!-- <span class="right badge badge-danger">New</span>-->
                            </p>
                        </a>
                    </li>
                </div>
                <!--                Mobile-->
                <div id="driver">
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="fas fa-parking"></i>
                            <p>
                                My Vehicle
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class='nav nav-treeview'>
                            <li class='nav-item'>
                                <a href="#" class='nav-link'>
                                    <div class='user-block'>
                                        <img class='img-circle img-bordered-sm'
                                             src='../dist/img/audi-a8-2018-3d-model-obj-blend-mtl.jpg' alt='user image'>
                                        <p style='padding-left: 10px; padding-top: 6px;'>KL-5150</p>
                                    </div>

                                </a>
                            </li>
                            <li class='nav-item'>
                                <a href='#' class='nav-link'>
                                    <div class='user-block'>
                                        <img class='img-circle img-bordered-sm'
                                             src='../dist/img/9973-2020-land-rover-range-rover-evoque.png'
                                             alt='user image'>
                                        <p style='padding-left: 10px; padding-top: 6px;'>KP-1623</p>
                                    </div>

                                </a>
                            </li>


                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="mySlot.php" class="nav-link">
                            <i class="fas fa-map-marked"></i>
                            <p>
                                My Location
                                <!-- <span class="right badge badge-danger">New</span>-->
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="addVehicle.php" class="nav-link">
                            <i class="fas fa-car"></i>
                            <p>
                                Add Vehicle
                                <!-- <span class="right badge badge-danger">New</span>-->
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="historyForDriver.php" class="nav-link">
                            <i class="fas fa-history"></i>
                            <p>
                                Park History
                                <!-- <span class="right badge badge-danger">New</span>-->
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="fas fa-parking"></i>
                            <p>
                                Parking Status
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="parkA.php" class="nav-link">
                                    <i class="far fa-circle"></i>
                                    <p>Park A</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </div>
                <div id="super">
                    <!--                Super Admin-->
                    <li class="nav-item">
                        <a href="parkingStatus_superAdmin.php" class="nav-link">
                            <i class="fas fa-parking"></i>
                            <p>
                                Parking Status
                                <!-- <span class="right badge badge-danger">New</span>-->
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="history_superAdmin.php" class="nav-link">
                            <i class="fas fa-history"></i>
                            <p>
                                Park History
                                <!-- <span class="right badge badge-danger">New</span>-->
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="manageCompany.php" class="nav-link">
                            <i class="fas fa-building"></i>
                            <p>
                                Manage Company
                                <!-- <span class="right badge badge-danger">New</span>-->
                            </p>
                        </a>
                    </li>
                    <!--                Super Admin and company admin-->
                    <li class="nav-item">
                        <a href="manageUser.php" class="nav-link">
                            <i class="fas fa-user"></i>
                            <p>
                                Manage Users
                                <!-- <span class="right badge badge-danger">New</span>-->
                            </p>
                        </a>
                    </li>
                    <!--                Super Admin and company admin-->
                    <li class="nav-item">
                        <a href="manageCharges.php" class="nav-link">
                            <i class="far fa-money-bill-alt"></i>
                            <p>
                                Manage Charges
                                <!-- <span class="right badge badge-danger">New</span>-->
                            </p>
                        </a>
                    </li>
                </div>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<script src="../controller/DashboardController.js"></script>