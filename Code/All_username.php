<!DOCTYPE html>
<html>

<head>
    <title>ลงทะเบียน</title>
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
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>
        <div class="logo">
            <img class="logo" src="../asset/logo/logo2.png" height="150" width="150">
        </div>
        <!-- /.navbar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../asset/images/Admin.png">
                    </div>
                    <div class="info">
                        <a class="font-weight:lighter"><b>Wellcome Admin</b></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-4">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
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
                            <a href="annouce.php" class="nav-link" data-toggle="modal" data-target="#AddModal">
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
                            <a href="All_username.php" class="nav-link" data-toggle="modal" data-target="#AddModal" style="background:#53a7d8;">
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
            <section class="content" style="width: 70%; margin-left: 13vw; ">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center">เลขที่ห้องพัก</th>
                                                <th style="text-align: center">Username</th>
                                                <th style="text-align: center">Password</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="text-align: center">A1</td>
                                                <td>
                                                    <div class="th1">
                                                        <div class="th1_1">-</div>
                                                        <div class="th1_2">
                                                            <button type="submit" class="btn btn-warning btn-block" style="width:5vw;"></a>แก้ไข <i class="fas fa-edit"></i></button>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="th1">
                                                        <div class="th1_1">-</div>
                                                        <div class="th1_2">
                                                            <button type="submit" class="btn btn-warning btn-block" style="width:5vw;"></a>แก้ไข <i class="fas fa-edit"></i></button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center">A2</td>
                                                <td>
                                                    <div class="th1">
                                                        <div class="th1_1">u0002</div>
                                                        <div class="th1_2">
                                                            <button type="submit" class="btn btn-warning btn-block" style="width:5vw;"></a>แก้ไข <i class="fas fa-edit"></i></button>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="th1">
                                                        <div class="th1_1">123456</div>
                                                        <div class="th1_2">
                                                            <button type="submit" class="btn btn-warning btn-block" style="width:5vw;"></a>แก้ไข <i class="fas fa-edit"></i></button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center">A3</td>
                                                <td>
                                                    <div class="th1">
                                                        <div class="th1_1">u0003</div>
                                                        <div class="th1_2">
                                                            <button type="submit" class="btn btn-warning btn-block" style="width:5vw;"></a>แก้ไข <i class="fas fa-edit"></i></button>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="th1">
                                                        <div class="th1_1">455621574</div>
                                                        <div class="th1_2">
                                                            <button type="submit" class="btn btn-warning btn-block" style="width:5vw;"></a>แก้ไข <i class="fas fa-edit"></i></button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center">A4</td>
                                                <td>
                                                    <div class="th1">
                                                        <div class="th1_1">u0004</div>
                                                        <div class="th1_2">
                                                            <button type="submit" class="btn btn-warning btn-block" style="width:5vw;"></a>แก้ไข <i class="fas fa-edit"></i></button>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="th1">
                                                        <div class="th1_1">78974564</div>
                                                        <div class="th1_2">
                                                            <button type="submit" class="btn btn-warning btn-block" style="width:5vw;"></a>แก้ไข <i class="fas fa-edit"></i></button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center">A5</td>
                                                <td>
                                                    <div class="th1">
                                                        <div class="th1_1">u0005</div>
                                                        <div class="th1_2">
                                                            <button type="submit" class="btn btn-warning btn-block" style="width:5vw;"></a>แก้ไข <i class="fas fa-edit"></i></button>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="th1">
                                                        <div class="th1_1">af54879a</div>
                                                        <div class="th1_2">
                                                            <button type="submit" class="btn btn-warning btn-block" style="width:5vw;"></a>แก้ไข <i class="fas fa-edit"></i></button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center">A6</td>
                                                <td>
                                                    <div class="th1">
                                                        <div class="th1_1">u0006</div>
                                                        <div class="th1_2">
                                                            <button type="submit" class="btn btn-warning btn-block" style="width:5vw;"></a>แก้ไข <i class="fas fa-edit"></i></button>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="th1">
                                                        <div class="th1_1">a5da48aa7</div>
                                                        <div class="th1_2">
                                                            <button type="submit" class="btn btn-warning btn-block" style="width:5vw;"></a>แก้ไข <i class="fas fa-edit"></i></button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center">A7</td>
                                                <td>
                                                    <div class="th1">
                                                        <div class="th1_1">u0007</div>
                                                        <div class="th1_2">
                                                            <button type="submit" class="btn btn-warning btn-block" style="width:5vw;"></a>แก้ไข <i class="fas fa-edit"></i></button>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="th1">
                                                        <div class="th1_1">78dsa4541ad</div>
                                                        <div class="th1_2">
                                                            <button type="submit" class="btn btn-warning btn-block" style="width:5vw;"></a>แก้ไข <i class="fas fa-edit"></i></button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center">A8</td>
                                                <td>
                                                    <div class="th1">
                                                        <div class="th1_1">-</div>
                                                        <div class="th1_2">
                                                            <button type="submit" class="btn btn-warning btn-block" style="width:5vw;"></a>แก้ไข <i class="fas fa-edit"></i></button>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="th1">
                                                        <div class="th1_1">-</div>
                                                        <div class="th1_2">
                                                            <button type="submit" class="btn btn-warning btn-block" style="width:5vw;"></a>แก้ไข <i class="fas fa-edit"></i></button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                    </table>
                                    <div class="container" style="width:170px; text-align:center;margin-top:2vh;">
                                        <a href="Register.php">
                                            <button type="button" class="btn btn-block bg-gradient-success btn-lg">Register <i class="fas fa-user-plus"></i></button>
                                        </a>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>

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
    <script>
        $(function() {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });
            $(document).ready(function() {
                Toast.fire({
                    icon: 'success',
                    title: ' ลงทะเบียนสำเร็จ'
                })
            });
        });
    </script>
</body>

</html>