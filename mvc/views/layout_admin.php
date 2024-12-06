<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <base href="<?php echo INDEX_URL;?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="tracngiemwebsite" />
        <meta name="author" content="tracnghiemwebsite" />
        <title>TracNghiem Admin</title>
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="./public/img/favicon.png"/>
        <!-- CSS -->
        <link href="./public/admin/css/styles.css" rel="stylesheet" />
        <link href="./public/admin/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="./public/admin/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
        <link href="./public/admin/css/dataTables.bootstrap4.min.css" rel="stylesheet"/>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="./public/admin/css/fontawesome.min.css">
        <script src="./public/admin/js/all.min.js"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="admin"><?php echo $_SESSION['admin']['username'];?></a>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-6">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="admin/setting">Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="admin/logout">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="admin">
                                <div class="sb-nav-link-icon"><i class="fa fa-home"></i></div>
                                HOME
                            </a>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThongbao" aria-expanded="false" aria-controls="collapseThongbao">
                                <div class="sb-nav-link-icon"><i class="fa fa-user"></i></div>
                                Quản lý tài khoản
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseThongbao" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="admin/danhsachTaiKhoan">Danh sách tài khoản</a>
                                    <a class="nav-link" href="admin/index1">Thông tin tài khoản</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsetaikhoan" aria-expanded="false" aria-controls="collapsetaikhoan">
                                <div class="sb-nav-link-icon"><i class="fa fa-question-circle"></i></div>
                                Quản lý câu hỏi
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsetaikhoan" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="admin/danhsachCauHoi">Danh sách bài thi</a>
                                    <a class="nav-link" href="admin/index2">Thông tin bài thi</a>
                                    <a class="nav-link" href="admin/lichsu">Lịch sử bài thi</a>

                                </nav>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <?php require_once "./mvc/views/pages/admin/".$data["Page"].".php" ?>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">
                                <a href="http://localhost/demo_doan_tracnghiem/"><b>LEPHAMNGOCTRANG.admin</b></a>
                                
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <!-- Javascript -->
        <script src="./public/admin/js/jquery-3.5.1.min.js"></script>
        <script src="./public/admin/js/popper.min.js"></script>
        <script src="./public/admin/js/bootstrap.min.js"></script>
        <script src="./public/admin/ckeditor/ckeditor.js"></script>
        <script src="./public/admin/js/moment.min.js"></script>
        <script src="./public/admin/js/bootstrap-datepicker.min.js"></script>
        <script src="./public/admin/js/bootstrap-datepicker.vi.min.js"></script>
        <script src="./public/admin/js/jquery.dataTables.min.js"></script>
        <script src="./public/admin/js/dataTables.bootstrap4.min.js"></script>
        <script src="./public/admin/js/Chart.min.js"></script>
        <!-- Custom js -->
        <script src="./public/admin/js/scripts.js"></script>
    </body>
</html>
