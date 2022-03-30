<!DOCTYPE html>
<html>

<head>
    <title>ประกาศ</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="author" content="Athipong Kaehom" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- DataTables -->
    <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="../asset/css/style.css">

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

</head>

<body class="hold-transition sidebar-mini">
    <div class=" wrapper" style="width:98.5vw">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="width:100wv">
            <!-- Left navbar links -->
            <ul class="navbar-nav" style="width:100px;">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <a type="button" class="btn btn-block btn-outline-danger" href="../logout.php">
                    <i class="fas fa-sign-out-alt"></i> ออกจากระบบ

                </a>
            </ul>
        </nav>

        <div class="logo">
            <img class="logo" src="../asset/logo/logo2.png" height="150" width="150">
        </div>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../asset/images/Admin.png">
                    </div>
                    <div class="info">
                        <a class="font-weight:lighter"><b style="color:#fff">Wellcome Admin</b></a>

                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-4">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="Dashboard.php" class="nav-link" data-toggle="modal" data-target="#AddModal">
                                <i class="fas fa-home"></i>
                                <p>
                                    หน้าแรก
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="annouce.php" class="nav-link" data-toggle="modal" data-target="#AddModal"
                                style="background:#53a7d8;">
                                <i class="fas fa-bullhorn"></i>
                                <p>
                                    ประกาศ
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="DetailUser.php" class="nav-link" data-toggle="modal" data-target="#AddModal">
                                <i class="fas fa-address-card"></i>
                                <p>
                                    ข้อมูลผู้อยู่อาศัย
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="complain.php" class="nav-link" data-toggle="modal" data-target="#AddModal">
                                <i class="fas fa-tools"></i>
                                <p>
                                    ร้องเรียน/แจ้งซ่อม
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="package.php" class="nav-link" data-toggle="modal" data-target="#AddModal">
                                <i class="fas fa-box-open"></i>
                                <p>
                                    จัดการพัสดุ
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="All_username.php" class="nav-link" data-toggle="modal" data-target="#AddModal">
                                <i class="fas fa-user-plus"></i>
                                <p>
                                    สร้างรหัสเข้าใช้ให้ผู้เช่า
                                </p>
                            </a>
                        </li>
                        <li class="nav-item" style="background-color: #FF6464; border-radius: 8px; ">
                            <a href="login.php" class="nav-link" data-toggle="modal" data-target="#AddModal">
                                <i class="fas fa-sign-out-alt" style="color: #000000;"></i>
                                <p style="color: #000000;">
                                    ออกจากระบบ
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <div class="content-wrapper" style="background-color: #88cdf6;">
            <div class="write">
                <div class="container" style="margin-left:15vw;">
                    <div class="card-body">
                        <div class=" form-group">
                            <input class="form-control" placeholder="เรื่อง:">
                        </div>
                    </div>
                </div>
                <div class="container date" style="margin-left:62.3vw; margin-top:-5vh; width:12vw;">
                    <div class="card-body">
                        <div class="form-group">
                            <input class="form-control" type="date" name="mydate">
                        </div>
                    </div>
                </div>
                <form action="annouce.php" method="post">
                    <div class=" container" style="width:8vw; margin-top:-2vh ; margin-left:65.1vw">
                        <button type="submit" class="btn btn-primary btn-block">ยืนยัน</button>
                    </div>
                    </from>
            </div>

            <div class="histr" style="margin-left:20vw">
                <h1>ประวัติการประกาศ <i class="fas fa-bullhorn"></i></h1>
                <div class="row">
                    <div class="col-md-9 col-sm-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-info"> <i class="fas fa-bullhorn"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">เรื่อง:</span>
                                <span class="info-box-number">วันที่: </span>
                            </div>
                            <div class="colum">
                                <button type="submit" class="btn btn-warning btn-block" style="width:5vw;"></a>แก้ไข <i
                                        class="fas fa-edit"></i></button>
                                <button type="submit" class="btn btn-danger btn-block" style="width:5vw;"></a>ลบ <i
                                        class="fas fa-trash-alt"></i></button>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <div class="col-md-9 col-sm-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-info"> <i class="fas fa-bullhorn"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">เรื่อง: </span>
                                <span class="info-box-number">วันที่: </span>
                            </div>
                            <div class="colum">
                                <button type="submit" class="btn btn-warning btn-block" style="width:5vw;"></a>แก้ไข <i
                                        class="fas fa-edit"></i></button>
                                <button type="submit" class="btn btn-danger btn-block" style="width:5vw;"></a>ลบ <i
                                        class="fas fa-trash-alt"></i></button>
                            </div>

                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>

                    <div class="col-md-9 col-sm-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-info"> <i class="fas fa-bullhorn"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">เรื่อง: </span>
                                <span class="info-box-number">วันที่: </span>
                            </div>
                            <div class="colum">
                                <button type="submit" class="btn btn-warning btn-block" style="width:5vw;"></a>แก้ไข <i
                                        class="fas fa-edit"></i></button>
                                <button type="submit" class="btn btn-danger btn-block" style="width:5vw;"></a>ลบ <i
                                        class="fas fa-trash-alt"></i></button>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <div class="col-md-9 col-sm-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-info"> <i class="fas fa-bullhorn"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">เรื่อง: </span>
                                <span class="info-box-number">วันที่: </span>
                            </div>
                            <div class="colum">
                                <button type="submit" class="btn btn-warning btn-block" style="width:5vw;"></a>แก้ไข <i
                                        class="fas fa-edit"></i></button>
                                <button type="submit" class="btn btn-danger btn-block" style="width:5vw;"></a>ลบ <i
                                        class="fas fa-trash-alt"></i></button>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <div class="col-md-9 col-sm-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-info"> <i class="fas fa-bullhorn"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">เรื่อง: </span>
                                <span class="info-box-number">วันที่: </span>
                            </div>
                            <div class="colum">
                                <button type="submit" class="btn btn-warning btn-block" style="width:5vw;"></a>แก้ไข <i
                                        class="fas fa-edit"></i></button>
                                <button type="submit" class="btn btn-danger btn-block" style="width:5vw;"></a>ลบ <i
                                        class="fas fa-trash-alt"></i></button>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                </div>
                <button class="btn btn-warning btn-block" onclick="myFunction1()" id="myBtn"
                    style=" width:7vw; margin-top:-1vh;">ดูเพิ่มเติม</button>
                <span id="less"></span>
                <span id="more">
                    <div class="row" style="margin-top:1vh;">
                        <div class="col-md-9 col-sm-6 col-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-info"> <i class="fas fa-bullhorn"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">เรื่อง: </span>
                                    <span class="info-box-number">วันที่: </span>
                                </div>
                                <div class="colum">
                                    <button type="submit" class="btn btn-warning btn-block" style="width:5vw;"></a>แก้ไข
                                        <i class="fas fa-edit"></i></button>
                                    <button type="submit" class="btn btn-danger btn-block" style="width:5vw;"></a>ลบ <i
                                            class="fas fa-trash-alt"></i></button>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <div class="col-md-9 col-sm-6 col-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-info"> <i class="fas fa-bullhorn"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">เรื่อง: </span>
                                    <span class="info-box-number">วันที่: </span>
                                </div>
                                <div class="colum">
                                    <button type="submit" class="btn btn-warning btn-block" style="width:5vw;"></a>แก้ไข
                                        <i class="fas fa-edit"></i></button>
                                    <button type="submit" class="btn btn-danger btn-block" style="width:5vw;"></a>ลบ <i
                                            class="fas fa-trash-alt"></i></button>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                    </div>
                </span>
            </div>
        </div>




















        <!-- jQuery -->
        <script src="../plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- ChartJS -->
        <script src="../plugins/chart.js/Chart.min.js"></script>
        <!-- Sparkline -->
        <script src="../plugins/sparklines/sparkline.js"></script>
        <!-- daterangepicker -->
        <script src="../plugins/moment/moment.min.js"></script>
        <script src="../plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="../plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../dist/js/adminlte.js"></script>
        <!-- DataTables -->
        <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <!-- SweetAlert2 -->
        <script src="../plugins/sweetalert2/sweetalert2.min.js"></script>
        <!-- Toastr -->
        <script src="../plugins/toastr/toastr.min.js"></script>
        <!-- More -->
        <script>
        function myFunction1() {
            var dots = document.getElementById("less");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "ดูเพิ่มเติม";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "ย่อลง";
                moreText.style.display = "inline";
            }
        }
        </script>
</body>

</html>