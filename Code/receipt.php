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
    <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="../asset/css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="../plugins/toastr/toastr.min.css">

    <link rel="shortcut icon" href="#">
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
                            <a href="complain.php" class="nav-link" data-toggle="modal" data-target="#AddModal">
                                <i class="fas fa-tools"></i>
                                <p>
                                    ร้องเรียน/แจ้งซ่อม
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="banking.php" class="nav-link" data-toggle="modal" data-target="#AddModal">
                                <i class="far fa-credit-card"></i>
                                <p>
                                    บัญชีธนาคาร
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="receipt.php" class="nav-link" data-toggle="modal" data-target="#AddModal" style="background:#53a7d8;">
                                <i class="fas fa-clipboard-list"></i>
                                <p>
                                    สลิปจ่ายเงิน
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
                            <a onclick="logout()" class="nav-link" data-toggle="modal" data-target="#AddModal">
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

                </div>
            </section>
            <section class="content-header">
                <div class="container-fluid">
                    <div class="text1_1"><i class="fas fa-clipboard-list"></i> ตรวจสอบการจ่ายค่าเช้าหอพัก </div>
                </div>
            </section>


            <section class="content" style="width: 70%; margin-left: 12vw; ">
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
                                                <th style="text-align: center">ค่าใช้จ่ายของเดือน</th>
                                                <th style="text-align: center">เวลาจ่ายบิล</th>
                                                <th style="text-align: center">ดูสลิปโอนเงิน</th>
                                                <th style="text-align: center">ลบค่าใช้จ่าย</th>
                                            </tr>
                                        </thead>
                                        <tbody id="table_receipt"></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>


        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <div class="showImg">
                    <img src="" alt="" id="infoReceipt" style="width:100%; height:100%;">
                </div>
            </div>
        </div>

        <div id="myModalDeleteReceipt" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <div style="text-align: center;">
                    <h2>จะลบรายละเอียดการจ่ายเงินนี้ใช่หรือไม่</h2>
                </div>
                <br>
                <div style="margin:0 auto;">
                    <button type="submit" class="btn btn-warning btn-block" style="width:5vw;" id="confirmDeleteReceipt"></a>ตกลง <i class="fas fa-edit"></i></button>
                </div>
            </div>
        </div>

    </div>

    <script type="text/javascript" src="../asset/js/script_global.js?version===1.0.3"></script>
    <script type="text/javascript" src="../asset/js/fetch.js"></script>
    <script type="text/javascript" src="../asset/js/script_receipt.js?version===1.0.3"></script>
    <script type="text/javascript" src="../asset/js/script_logout.js?version===1.0.3"></script>

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
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

    <!-- SweetAlert2 -->
    <script src="../plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="../plugins/toastr/toastr.min.js"></script>

    <!-- Page specific script -->
    <script>
        $(document).ready(function() {
            setTimeout(() => {
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": true,
                    "responsive": true,
                });
            }, 500);
        });
    </script>

    <script>
        var modal = document.getElementById("myModal");
        var span = document.getElementsByClassName("close")[0];
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

    <script>
        var modalDeleteReceipt = document.getElementById("myModalDeleteReceipt");
        var span = document.getElementsByClassName("close")[1];
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modalDeleteReceipt.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modalDeleteReceipt) {
                modalDeleteReceipt.style.display = "none";
            }
        }
    </script>


</body>

</html>