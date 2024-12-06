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
            Tài Khoản Người Dùng
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
    <form action="trangchu/doimatkhau1" method="post" class="form-horizontal " style="width:60%; margin-left:25%;">
        <div class="form-group " >
            <label class="col-sm-2 control-label"> <h5>UserName</h5></label><br>
            <div class="col-md-10 ">
                <input type="text" readonly class="form-control" id="username" name="username" value="<?php if(!empty($data["taikhoan"])){echo $data["taikhoan"]["username"];}?>">
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label"><h5>Password</h5></label>
            <div class="col-md-10">
                <input type="text" readonly class="form-control" id="password" name="password" value="<?php if(!empty($data["taikhoan"])){echo $data["taikhoan"]["password"];}?>">
            </div>
        </div>
        <div class="row form-group" style="width:85%;">
            <div class="col text-right" >
            <button type="submit" class="btn btn-primary" name="btnSubmit">Đổi Mật Khẩu</button>
            <a href="#" class="btn btn-primary">Quay về TrangChủ</a>
            </div>
        </div>
    </form>
</div>

           