<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <base href="<?php echo INDEX_URL;?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Đăng nhập admin</title>
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="./public/img/favicon.png"/>
        <!-- CSS -->
        <link href="./public/admin/css/styles.css" rel="stylesheet" />
        <!-- Javascript -->
        <script src="./public/admin/js/all.min.js"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <?php
                                            if(isset($data['Error'])){
                                                echo "<div class='alert alert-danger'>";
                                                echo "<i class='fas fa-exclamation-triangle'></i>";
                                                echo "{$data['Error']}";
                                                echo "</div>";
                                            }
                                        ?>
                                        <form action="admin/login" method="POST">
                                            <div class="form-group">
                                                <label class="small mb-1">Username</label>
                                                <input class="form-control py-4" name="username" type="text" placeholder="Enter username" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">Password</label>
                                                <input class="form-control py-4" name="password" type="password" placeholder="Enter password" />
                                            </div>
                                            <div class="form-group mt-4 mb-0 text-right">
                                                <button type="submit" class="btn btn-primary" name="btnSubmit">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="align-items-center text-center justify-content-between small">
                            <div class="text-muted">
                                <a href="#"><b>LEPHAMNGOCTRANG</b></a>
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="./public/admin/js/jquery-3.5.1.min.js"></script>
        <script src="./public/admin/js/bootstrap.bundle.min.js"></script>
        <script src="./public/admin/js/scripts.js"></script>
    </body>
</html>