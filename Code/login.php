<!DOCTYPE html>
<html>

<head>
    <title>เข้าสู่ระบบ</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Sign in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <link rel="stylesheet" href="../asset/css/style.css">

</head>

<body class="hold-transition login-page" style="background: linear-gradient( #88cdf6,#f2f2f2);">

    <div class="login-box">
        <div class="login-logo">
            <a href="login.php"><b>Admin</b> | Sign in</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class=" card-body login-card-body" style="background: linear-gradient( #FF8AAE,#FFB2A6);">
                <p class="login-box-msg" style="color:#ffffff">ลงชื่อเข้าใช้สำหรับ Admin</p>

                <form action=" Dashboard.php" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" name="username" id="username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">

                        </div>
                        <!-- /.col -->
                        <div class="container" style="width:40%">
                            <button type="submit" class="btn btn-block bg-gradient-primary ">เข้าสู่ระบบ </button>

                        </div>
                        <!-- /.col -->
                    </div>
                </form>






                <script type="text/javascript" src="assets/js/fetch.js"></script>
                <script type="text/javascript" src="assets/js/script_1.js"></script>

                <!-- /.social-auth-links -->

                <!-- jQuery -->
                <script src="plugins/jquery/jquery.min.js"></script>
                <!-- Bootstrap 4 -->
                <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                <!-- AdminLTE App -->
                <script src="dist/js/adminlte.min.js"></script>
                <!-- SweetAlert2 -->

</body>

</html>