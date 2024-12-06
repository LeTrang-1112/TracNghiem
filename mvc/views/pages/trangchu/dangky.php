<!DOCTYPE html>
<html lang="en">
   
    <header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">Đăng Nhập</h1>
    </div>
</header>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container" style="margin-bottom:10%;">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Đăng Ký</h3></div>
                                    <div class="card-body">
                                    <?php
                                        if(isset($data['Message'])){
                                            echo "<div class='alert alert-danger'>";
                                            echo "<i class='fas fa-exclamation-triangle'></i>";
                                            echo "{$data['Message']}";
                                            echo "</div>";
                                        }
                                    ?>
                                    <?php
                                        if(isset($data['Error'])){
                                            echo "<div class='alert alert-danger'>";
                                            echo "<i class='fas fa-exclamation-triangle'></i>";
                                            echo "{$data['Error']}";
                                            echo "</div>";
                                        }
                                    ?>
                                        <form action="trangchu/dangky" method="POST">
                                            <div class="form-group">
                                                <label class="small mb-1">Username</label>
                                                <input class="form-control py-4" id="username" name="username" type="text" placeholder="Enter username" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">Password</label>
                                                <input class="form-control py-4" id="password"name="password" type="password" placeholder="Enter password" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">Confirm Password</label>
                                                <input class="form-control py-4" id="cf_password"name="cf_password" type="password" placeholder="Enter confirm password" />
                                            </div>
                                            <div class="form-group mt-4 mb-0 text-right">
                                                <button type="submit" class="btn btn-primary" name="btnSubmit">Đăng Ký</button>
                                                <a href="trangchu/login" class="btn btn-primary">Đăng Nhập</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            
        </div>
    </body>
</html>