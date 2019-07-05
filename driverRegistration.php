<?php
/**
 * Created by PhpStorm.
 * User: jehan
 * Date: 9/29/2018
 * Time: 5:58 AM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Parking</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body class="hold-transition login-page" style="background: white;">
<div class="login-box">
    <div class="login-logo">

    </div>
    <!-- Registration -->
    <form action="#" method="post">
        <div class="card" style="background:white;" id="signupCard">
            <div class="card-body login-card-body"
                 style="border-radius: 10px; padding: 30px ; box-shadow: 0px 0px 10px 0px">

                <div class="text-center" style="padding-bottom: 10px">
                    <img class="profile-user-img img-fluid img-circle"
                         src="dist/img/businessman.png"
                         alt="User profile picture">
                    <P class="text-center " style="color: #606468"><b>Welcome! Sign Up And Become A Member</b></P>
                </div>

                <div class="form-group has-feedback" style="padding-bottom: 10px">
                    <input type="text" class="form-control" placeholder="Name" name="name"
                           style="border-radius: 20px;background:white; color: #2c3338">
                </div>
                <div class="form-group has-feedback" style="padding-bottom: 10px">
                    <input type="text" class="form-control" placeholder="Email" name="mail"
                           style="border-radius: 20px;background:white; color: #2c3338">
                </div>
                <div class="form-group has-feedback" style="padding-bottom: 10px">
                    <input type="text" class="form-control" placeholder="Nic" name="nic"
                           style="border-radius: 20px;background:white; color: #2c3338">
                    <input type="hidden" name="">
                </div>
                <div class="form-group has-feedback" style="padding-bottom: 10px">
                    <input type="text" class="form-control" placeholder="User Name" name="name"
                           style="border-radius: 20px;background:white; color: #2c3338">
                </div>
                <div class="form-group has-feedback" style="padding-bottom: 10px">
                    <input type="password" class="form-control" placeholder="Password" name="Password"
                           style="border-radius: 20px;background:white; color: #2c3338">
                    <input type="hidden" name="">
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-12">
                        <button type="button" name="btn_next" id="btn-next" class="btn btn-primary btn-block btn-flat"
                                style="border-radius: 20px">Sign Up
                        </button>
                    </div>
                    <!-- /.col -->
                </div>

                <div class="text-lg-center" style="padding-top: 10px">

                    <p class="mb-1">
                        <a href="index.php" style="text-decoration: none;color: #606468;"><strong>Have an Account ?</strong></a>
                    </p>
                </div>
            </div>
            <!-- /.login-card-body -->
        </div>

    </form>
    <div class="text-lg-left" style="padding-top: 10px">

        <p class="mb-1">
            <strong style="color: #606468"> &copy; 2018 Parking&nbsp;&nbsp;Version 1.0</strong>
        </p>
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<!-- InputMask -->
<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script>

</script>
</body>
</html>
