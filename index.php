<?php
/**
 * Created by PhpStorm.
 * User: jehan
 * Date: 12/10/2018
 * Time: 5:34 AM
 */
?>
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
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
    <!-- /.login-logo -->
    <div class="card" style="background:white;" id="loginCard">
        <div class="card-body login-card-body"
             style="border-radius: 10px; padding: 30px ; box-shadow: 0px 0px 10px 0px">

            <div class="text-center" style="padding-bottom: 10px">
                <img class="profile-user-img img-fluid img-circle"
                     src="dist/img/sheriff.png"
                     alt="User profile picture">
                <P class="text-center " style="color: #606468"><b>Welcome! Please Login</b></P>
            </div>
            <form action="index.php" method="post">
                <div class="form-group has-feedback" style="padding-bottom: 10px">
                    <input type="text" class="form-control" placeholder="Name" name="name"
                           style="border-radius: 20px;background:white; color: #2c3338" id="mail">
                </div>
                <div class="form-group has-feedback" style="padding-bottom: 10px">
                    <input type="password" class="form-control" placeholder="Password" name="password"
                           style="border-radius: 20px;background:white; color: #2c3338" id="pass">
                    <input type="hidden" >
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-12">
                        <button type="button" id="loginBtn" name="btn_login" class="btn btn-info btn-block btn-flat"
                                style="border-radius: 20px;background-color: #009cdf!important;">Login
                        </button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <div class="text-lg-left" style="padding-top: 10px">

                <p class="mb-1">
                    <a href="#" style="text-decoration: none;color: white;" id="mylogin">I forgot my password</a>
                </p>
            </div>
        </div>
        <!-- /.login-card-body -->
    </div>
    <div class="row" id="dontHaveAccount">
        <div class="col-md-12">
            <div class="card" style="background:white">
                <div class="card-body login-card-body"
                     style="border-radius: 10px ; box-shadow: 0px 0px 10px 0px;padding-top: 10px;padding-bottom: 10px;">
                    <p class="text-center" style="margin-bottom: 15px; margin-top: 15px;">
                        <strong><a href="#" style="text-decoration: none;color: #606468;" id="mylogin">Don't
                                Have An Account ?</a></strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card" style="background:#2c3338; display: none" id="myForgetBox">
        <div class="card-body login-card-body"
             style="border-radius: 10px; padding: 30px ; box-shadow: 0px 0px 10px 0px">

            <div class="text-center" style="padding-bottom: 10px">
                <img class="profile-user-img img-fluid img-circle"
                     src="dist/img/user1-128x128.jpg"
                     alt="User profile picture">
                <P class="text-center " style="color: #606468"><b>Reset Password</b></P>
            </div>
            <form action="index.php" method="post">
                <div class="form-group has-feedback" style="padding-bottom: 10px">
                    <input type="text" class="form-control" placeholder="Enter Your Name" name="name"
                           style="border-radius: 20px;background:#2c3338; color: white">
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-12">
                        <button type="submit" name="btn_login" class="btn btn-primary btn-block btn-flat"
                                style="border-radius: 20px">Request
                        </button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <div class="text-lg-left" style="padding-top: 10px">

                <p class="mb-1">
                    <a href="#" style="text-decoration: none;color: white;" id="backto">Go Back To Login Page</a>
                </p>
            </div>
        </div>
        <!-- /.login-card-body -->
    </div>
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
<script src="controller/LoginController.js"></script>
</body>
</html>

