<!DOCTYPE html>
<html>

<head>
    <title>จัดการพัสดุ</title>
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
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

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
                            <a href="package.php" class="nav-link" data-toggle="modal" data-target="#AddModal"
                                style="background:#53a7d8;">
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
            <!-- Content Header (Page header) -->
            <section class=" content-header">
                <div class="container-fluid">
                    <div class="numRoomP">
                        <div class="numRoomPS1">ห้อง :</div>
                        <div class="numRoomPS2">A2</div>
                    </div>
                    <div class="text2_1">เพิ่มพัสดุ</div>

                    <div class="AddPackage">
                        <div class="APKF">เลขพัสดุ :</div>
                        <div class="APKS">
                            <input type="addpackage" placeholder="เลขพัสดุ" style="width: 17vw"></input>
                        </div>
                        <div class="APKBtt">
                            <button type="button" class="btn btn-block btn-success">เพิ่ม <i
                                    class="fas fa-plus-circle"></i></button>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content" style="width: 70%; margin-left: 12vw; ">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-header">
                                    <h3 class="card-title">ตรวจสอบพัสดุ</h3>
                                </div>
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">เลชพัสดุ</th>
                                                <th style="text-align: center;">วันที่</th>
                                                <th style="text-align: center;">สถานะ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="text-align: center;">SDOF5064848141</td>
                                                <td style="text-align: center;">12/10/2561</td>
                                                <td style="text-align: center;">
                                                    <div class="th1">
                                                        <div class="th1_1">ยังไม่ได้ได้รับพัสดุ</div>
                                                        <div class="th1_2">
                                                            <button type="submit" class="btn btn-warning btn-block"
                                                                style="width:5vw;"></a>แก้ไข <i
                                                                    class="fas fa-edit"></i></button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center;">PPSF5064823331</td>
                                                <td style="text-align: center;">26/09/2561</td>
                                                <td style="text-align: center;">
                                                    <div class="th1">
                                                        <div class="th1_1">ได้รับพัสดุแล้ว</div>
                                                        <div class="th1_2">
                                                            <button type="submit" class="btn btn-warning btn-block"
                                                                style="width:5vw;"></a>แก้ไข <i
                                                                    class="fas fa-edit"></i></button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center;">PPSF5064823331</td>
                                                <td style="text-align: center;">03/09/2561</td>
                                                <td style="text-align: center;">
                                                    <div class="th1">
                                                        <div class="th1_1">ได้รับพัสดุแล้ว</div>
                                                        <div class="th1_2">
                                                            <button type="submit" class="btn btn-warning btn-block"
                                                                style="width:5vw;"></a>แก้ไข <i
                                                                    class="fas fa-edit"></i></button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
        </div>










        <!-- jQuery -->
        <script src="../plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- DataTables  & Plugins -->
        <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="../plugins/jszip/jszip.min.js"></script>
        <script src="../plugins/pdfmake/pdfmake.min.js"></script>
        <script src="../plugins/pdfmake/vfs_fonts.js"></script>
        <script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../dist/js/demo.js"></script>
        <!-- Page specific script -->
        <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
        </script>

</body>

</html>