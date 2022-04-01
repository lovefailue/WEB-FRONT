<!DOCTYPE html>
<html>

<head>
    <title>ข้อมูลผู้อยู่อาศัย</title>
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
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i>

                    </a>
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
                            <a href="DetailUser.php" class="nav-link" data-toggle="modal" data-target="#AddModal"
                                style="background:#53a7d8;">
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
                            <a href="Register.php" class="nav-link" data-toggle="modal" data-target="#AddModal">
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
                    <div class="numRoomD">
                        <div class="numRoomDS1">ห้อง :</div>
                        <div class="numRoomDS2">A2</div>
                    </div>
                    <div class="textAllDetail">
                        <div class="textAllDetail1">ชื่อ :</div>
                        <div class="textAllDetail2">ศุภชัย สมณะ</div>
                    </div>
                    <div class="textAllDetail">
                        <div class="textAllDetail1">เบอร์โทร :</div>
                        <div class="textAllDetail2">0992434393</div>
                    </div>
                    <div class="textAllDetail">
                        <div class="textAllDetail1">Email :</div>
                        <div class="textAllDetail2">Supachais61@nu.ac.th</div>
                    </div>
                    <div class="textAllDetail" style="margin-top: 5vh;">
                        <div class="textAllDetail1">ข้อมูลค่าใช้จ่าย</div>
                        <div class="textAllDetail2" style="margin-top: -1vh;">
                            <img src="https://img.icons8.com/ios/50/000000/cash.png" />
                        </div>
                    </div>
                    <div class="textAllDetail">
                        <div class="textAllDetail1">สถานะ :</div>
                        <div class="textAllDetail2">ยอดค้างชำระ</div>
                        <div class="textAllDetail3">
                            <button type="submit" class="btn btn-warning btn-block" style="width:5vw;">แก้ไข <i
                                    class="fas fa-edit"></i></button>
                        </div>
                    </div>
                    <div class="textAllDetail">
                        <div class="textAllDetail1">เดือน :</div>
                        <div class="textAllDetail2">
                            <div class="margin">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default">เดือน</button>
                                    <button type="button" class="btn btn-default dropdown-toggle dropdown-icon"
                                        data-toggle="dropdown">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu" role="menu">
                                        <a class="dropdown-item">มกราคม</a>
                                        <a class="dropdown-item">กุมภาพันธ์</a>
                                        <a class="dropdown-item">มีนาคม</a>
                                        <a class="dropdown-item">เมษายน</a>
                                        <a class="dropdown-item">พฤษพาคม</a>
                                        <a class="dropdown-item">มิถุนายน</a>
                                        <a class="dropdown-item">กรกฎาคม</a>
                                        <a class="dropdown-item">สิงหาคม</a>
                                        <a class="dropdown-item">กันยายน</a>
                                        <a class="dropdown-item">ตุลาคม</a>
                                        <a class="dropdown-item">พฤศจิกายน</a>
                                        <a class="dropdown-item">ธันวาคม</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            <section class="content" style="width: 70%; margin-left: 13vw; margin-top:5vh; ">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">ค่าไฟ <i class="fas fa-bolt"></i></th>
                                                <th style="text-align: center;">ค่าน้ำ <i class="fas fa-tint"></i></th>
                                                <th style="text-align: center;">ค่าเช่าห้อง <i class="fas fa-bed"></i>
                                                </th>
                                                <th style="text-align: center;">รวม <i
                                                        class="fas fa-file-invoice-dollar"></i></th>
                                                <th style="text-align: center;">action <i class="fas fa-users-cog">
                                                    </i>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="text-align: center;">1200</td>
                                                <td style="text-align: center;">200</td>
                                                <td style="text-align: center;">300</td>
                                                <td style="text-align: center;">4400</td>
                                                <td style="text-align: center;width:13vw;">
                                                    <button type="button" class="btn btn-block btn-warning"
                                                        style="width:8vw; margin-left:2vw;">แก้ไขค่าใช้จ่าย <i
                                                            class="fas fa-edit"></i></button>
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

    </div>



    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <!-- <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
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

</body>

</html>