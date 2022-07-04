<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register User</title>

    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="../plugins/toastr/toastr.min.css">
</head>

<body class="hold-transition register-page" style="background: linear-gradient( #88cdf6,#f2f2f2);">
    <div class="register-box">
        <div class="register-logo">
            <h2>สร้างรหัสสำหรับผู้เช่าหอพัก</h2>
        </div>

        <div class="card">
            <div class="card-body register-card-body" style="background: linear-gradient( #FF8AAE,#FFB2A6);">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="First Name" name="fname" id="fname">
                    <!-- <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div> -->
                </div>
                <div style="margin-top: -2vh; width:100%; text-align:center; height:2.8vh;">
                    <small id="errFname"></small>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Last Name" name="lname" id="lname">
                    <!-- <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div> -->
                </div>
                <div style="margin-top: -2vh; width:100%; text-align:center; height:2.8vh;">
                    <small id="errLname"></small>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="age" name="age" id="age">
                    <!-- <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div> -->
                </div>
                <div style="margin-top: -2vh; width:100%; text-align:center; height:2.8vh;">
                    <small id="errAge"></small>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Room" name="room" id="room">
                    <!-- <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div> -->
                </div>
                <div style="margin-top: -2vh; width:100%; text-align:center; height:2.8vh;">
                    <small id="errRoom"></small>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Telephone Number" name="tel" id="tel">
                    <!-- <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div> -->
                </div>
                <div style="margin-top: -2vh; width:100%; text-align:center; height:2.8vh;">
                    <small id="errTel"></small>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Email" name="email" id="email">
                    <!-- <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div> -->
                </div>
                <div style="margin-top: -2vh; width:100%; text-align:center; height:2.8vh;">
                    <small id="errEmail"></small>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Username" name="username" id="username">
                    <!-- <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div> -->
                </div>
                <div style="margin-top: -2vh; width:100%; text-align:center; height:2.8vh;">
                    <small id="errUser"></small>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                    <!-- <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div> -->
                </div>
                <div style="margin-top: -2vh; width:100%; text-align:center; height:2.8vh;">
                    <small id="errPass"></small>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Confirm Password" name="c_password" id="c_password">
                    <!-- <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div> -->
                </div>
                <div style="margin-top: -2vh; width:100%; text-align:center; height:2.8vh;">
                    <small id="errCPass"></small>
                </div>
                <!-- /.col -->
                <div style="width: 40%; margin-left: 30%">
                    <button type="submit" class="btn btn-block bg-gradient-success  swalDefaultSuccess" onclick="regis()">
                        Register
                        <i class="fas fa-user-plus"></i>
                    </button>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.col -->
        </div>
    </div>
    <!-- /.form-box -->
    </div><!-- /.card -->
    </div>

    <script type="text/javascript" src="../asset/js/script_global.js?version===1.0.3"></script>
    <script type="text/javascript" src="../asset/js/fetch.js"></script>
    <script type="text/javascript" src="../asset/js/script_regis.js?version===1.0.3"></script>

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="../plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="../plugins/toastr/toastr.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <!-- Page specific script -->

</body>

</html>