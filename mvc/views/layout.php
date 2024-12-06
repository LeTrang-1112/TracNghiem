<!DOCTYPE html>
<html>
<head>
    <!-- Basic -->
    <base href=<?php echo INDEX_URL;?>>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="mysite">
    <meta name="keywords" content="mysite">
    <meta name="description" content="Welcome to mywebsite">
    <!-- Title -->
    <title>TRẮC NGHIỆM ONLINE</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="./public/img/favicon.png"/>
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1">
    <!-- Font Awesome icons (free version)-->
    <script src="./public/js/all.js"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./public/css/styles.css">
</head>
<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="">Trắc Nghiệm</a>
            <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="trangchu">Trang Chủ</a></li>
                    <li class="dropdown nav-item mx-0 mx-lg-1" style="" >
                    <a class="dropdown-toggle nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-toggle="dropdown" href="#">Bài Thi
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu" >
                    <li><a href="trangchu/CauHoith">Bài Thi Tiểu Học</a></li>
                    <li><a href="trangchu/CauHoics">Bài Thi Trung Học Cơ Sở</a></li>
                    <li><a href="trangchu/CauHoipt">Bài Thi Trung Học Phổ Thông</a></li>
                    </ul>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="trangchu/lichSuThi">Lịch Sử Thi</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="trangchu/about">About Us</a></li>
                    <nav class="sb-topnav navbar navbar-expand navbar-dark ">
                        <!-- Navbar-->
                        <ul class="navbar-nav ml-auto ml-md-6">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="trangchu/setting">Tài Khoản</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="trangchu/logout">Đăng Xuất</a>
                                    <a class="dropdown-item" href="trangchu/dangnhap">Đăng Nhập</a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </ul>
            </div>
        </div>
    </nav>
    <?php require_once "./mvc/views/pages/trangchu/".$data["Page"].".php" ?>
    <!-- Footer-->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Địa chỉ</h4>
                    <p class="lead mb-0">
                        Trường Cao Đẳng Kỹ Thuật Cao Thắng
                        <br />
                        65 Huỳnh Thúc Kháng, Phường Bến Nghé, Quận 1, TP.HCM
                    </p>
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Liên kết</h4>
                    <a class="btn btn-outline-light btn-social mx-1" href="#" target="_blank"><i class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#" target="_blank"><i class="fas fa-university"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#" target="_blank"><i class="fas fa-school"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#" target="_blank"><i class="fas fa-globe"></i></a>
                </div>
                <!-- Footer About Text-->
                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">Liên hệ</h4>
                    <p class="lead mb-0">
                        Văn phòng khoa Công nghệ thông tin, lầu 7, dãy F, Trường CĐKT Cao Thắng
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container">
            <large>
                Copyright &copy;
                <a class="text-white" href="#"><b>WEBSITE TRẮC NGHIỆM</b></a>
                <script>
                    document.write(new Date().getFullYear());
                </script>
                . All Rights Reserved. Designed by <b>MYWEBSITE.COM</b>
            </large>
        </div>
    </div>
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
    <div class="scroll-to-top position-fixed">
        <a class="js-scroll-trigger d-block text-center text-white rounded" href="<?php if(isset($_GET["url"])){echo $_GET["url"];}?>#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
    <!-- Bootstrap core JS-->
    <script src="./public/js/jquery-3.5.1.min.js"></script>
    <script src="./public/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="./public/js/anime.min.js"></script>
    <!-- Contact form JS-->
    <script src="./public/js/jqBootstrapValidation.js"></script>
    <script src="./public/js/contact_me.js"></script>
    <!-- Core theme JS-->
    <script src="./public/js/scripts.js"></script>
</body>
</html>