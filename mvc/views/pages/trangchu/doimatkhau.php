<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0"></h1>
    </div>
</header>
<div class="container-fluid">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">
            <a href="#">Home</a>
        </li>
        <li class="breadcrumb-item">
            Đổi Mật Khẩu
        </li>
    </ol>
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
    <form action="trangchu/doimatkhau_tk" method="post" class="form-horizontal " style="width:60%; margin-left:25%;">
        <div class="form-group " >
            <label class="col-sm-2 control-label">UserName</label><br>
            <div class="col-md-10 ">
                <input type="text" readonly class="form-control" id="username" name="username" value="<?php echo $_SESSION['tai_khoan']['username'];?>">
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Password</label>
            <div class="col-md-10">
                <input type="password" class="form-control" id="password" name="password" placeholder="nhập mật khẩu mới">
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">Confirm Password</label>
            <div class="col-md-10">
                <input type="password" class="form-control" id="cf_password" name="cf_password" placeholder="nhập lại mật khẩu">
            </div>
        </div>
        <div class="row form-group">
            <div class="col text-right">
            <button type="submit" class="btn btn-primary" name="btnSubmit">Đổi Mật Khẩu</button>
            <a href="#" class="btn btn-primary">Quay về TrangChủ</a>
            </div>
        </div>
    </form>
</div>

           