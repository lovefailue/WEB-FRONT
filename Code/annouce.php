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
    <div class=" wrapper">
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
                            <a href="annouce.php" class="nav-link" data-toggle="modal" data-target="#AddModal" style="background:#53a7d8;">
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
                            <a href="receipt.php" class="nav-link" data-toggle="modal" data-target="#AddModal">
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
            <div class="write">
                <div class="container" style="margin-left:15vw;">
                    <div class="card-body">
                        <div class=" form-group">
                            <input class="form-control" placeholder="เรื่อง:" name="topic" id="topic">
                        </div>
                        <div style="margin-top: -2vh; width:100%; text-align:center; height:2.8vh;">
                            <small id="errTopic"></small>
                        </div>
                    </div>
                </div>
                <div class="container" style="margin-left:15vw; margin-top:-2vh;">
                    <div class="card-body">
                        <div class=" form-group">
                            <input class="form-control" placeholder="เนื้อหา:" name="description" id="description">
                        </div>
                        <div style="margin-top: -2vh; width:100%; text-align:center; height:2.8vh;">
                            <small id="errDes"></small>
                        </div>
                    </div>
                </div>
                <div class=" container" style="width:8vw; margin-top:-2vh ; margin-left:65.1vw">
                    <button type="submit" class="btn btn-success swalDefaultSuccess" onclick="add_announce()">ยืนยัน</button>
                </div>
            </div>

            <div class="histr" style="margin-left:20vw">
                <h1>ประวัติการประกาศ <i class="fas fa-bullhorn"></i></h1>
                <div class="row">
                    <div class="col-md-9 col-sm-6 col-12" id="box_announce">

                        <!-- /.info-box -->
                    </div>
                </div>
            </div>

            <div id="myModal" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <div style="text-align: center;">
                        <h2>ต้องการลบประกาศนี้หรือไม่</h2>
                    </div>
                    <br>
                    <div style="margin:0 auto;">
                        <button type="submit" class="btn btn-warning btn-block" style="width:5vw;" id="confirmDelete"></a>ตกลง <i class="fas fa-edit"></i></button>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- The Modal -->
        <!-- <div id="myModal" class="modal">

                <!-- Modal content -->
        <!-- <div class="modal-content">
                    <span class="close">&times;</span>
                    <br>
                    <div class="input-group mb-3" style="display:none;">
                        <input type="text" class="form-control" placeholder="เรื่อง" name="editID" id="editID" value="">
                    </div>
                    <p>เรื่อง</p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="เรื่อง" name="editTopic" id="editTopic" value="">
                    </div>
                    <div style="margin-top: -2vh; width:100%; text-align:center; height:2.8vh;">
                        <small id="errNewTopic"></small>
                    </div>
                    <p>เนื้อหา</p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="เนิ้อหา" name="editDescription" id="editDescription" value="">
                    </div>
                    <div style="margin-top: -2vh; width:100%; text-align:center; height:2.8vh;">
                        <small id="errNewDesc"></small>
                    </div>
                    <div style="margin:0 auto;">
                        <button type="submit" class="btn btn-warning btn-block" style="width:5vw;" onclick="editData()"></a>แก้ไข <i class="fas fa-edit"></i></button>
                    </div>

                </div> -->

        <!-- </div> -->

    </div>

















    <script type="text/javascript" src="../asset/js/script_global.js?version===1.0.3"></script>
    <script type="text/javascript" src="../asset/js/fetch.js"></script>
    <script type="text/javascript" src="../asset/js/script_add-announce.js?version===1.0.3""></script>
    <script type=" text/javascript" src="../asset/js/script_GetAnnounce.js?version===1.0.3"></script>
    <script type="text/javascript" src="../asset/js/script_logout.js?version===1.0.3"></script>


    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
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



</body>

</html>