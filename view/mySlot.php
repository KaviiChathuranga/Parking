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
                    <h1 class="m-0 text-dark">My Park Location</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#">My Park Location</a></li>
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
                    <div class="card">
                        <div class="card-body login-card-body" id="viewLocationDiv"
                             style="border-radius: 10px; padding: 30px ; box-shadow: 0px 0px 10px 0px;background-color: white"">



                                                        <div id="btnClick"
                                                             style="background-color: #009cdf!important;position:relative;border-radius: 20px;">
                                                            <div class="text-center" style="padding-bottom: 10px">
                                                                <img
                                                                        src="../dist/img/040-map.png"
                                                                        style="width: 40%">
                                                                <div class="col-12 mt-4">
                                                                    <button type="button" id="viewSlot"
                                                                            class="btn btn-info btn-lg btn-block btn-flat"
                                                                            style="border-radius: 20px;background-color: #009cdf!important;"><i
                                                                                style="color: white" class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;Tap
                                                                        Here<br/>View My Your Parking <br/>Location
                                                                    </button>
                                                                </div>
                                                            </div>








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
    $('#viewSlot').on('click', function () {
        $('#btnClick').hide();
        $('#viewLocationDiv').append("                            <div class=\"text-center\" style=\"padding-bottom: 10px\">\n" +
            "                                <img\n" +
            "                                        src=\"../dist/img/040-map.png\"\n" +
            "                                        style=\"width: 40%\">\n" +
            "                                <div class=\"col-12 mt-4\">\n" +
            "                                    <div class=\"form-group has-feedback\" style=\"padding-bottom: 10px\">\n" +
            "\n" +
            "                                        <label type=\"text\" class=\"form-control\"  name=\"name\"\n" +
            "                                               style=\"border-radius: 20px;background:white; color: #2c3338;font-size: 20px\">Lanka Hospital</label>\n" +
            "                                    </div>\n" +
            "                                    <div class=\"form-group has-feedback\" style=\"padding-bottom: 10px \">\n" +
            "                                        <label type=\"text\" class=\"form-control\"  name=\"name\"\n" +
            "                                               style=\"border-radius: 20px;background:white; color: #2c3338;font-size: 20px\" >Park A</label>\n" +
            "                                    </div>\n" +
            "                                    <div class=\"form-group has-feedback\" style=\"padding-bottom: 10px\">\n" +
            "                                        <label type=\"text\" class=\"form-control\"  name=\"name\"\n" +
            "                                               style=\"border-radius: 20px;background:white; color: #2c3338;font-size: 50px\">Slot 15</label>\n" +
            "                                    </div>\n" +
            "                                </div>\n" +
            "                            </div>");
    });
</script>

