<?php
/**
 * Created by PhpStorm.
 * User: jehan
 * Date: 9/29/2018
 * Time: 4:25 AM
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
                        <h1 class="m-0 text-dark">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
        <?php
        require_once('infoBox.php');
        ?>

    </div>
    <!-- /.content-wrapper -->

<?php

require_once('footer.php');


?>