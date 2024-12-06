<div class="container-fluid">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">
            <a href="admin">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="admin/danhsachTaiKhoan">Quản lý Tài Khoản</a>
        </li>
        <li class="breadcrumb-item">
            Thêm Tài Khoản
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
    <form id="themsinhvien" action="admin/themtaikhoan" method="post" class="form-horizontal">
        <div class="row form-group">
            <label for="username" class="col-sm-2 control-label">USERNAME</label>
            <div class="col-md-10">
            <input type="text" class="form-control" id="username" name="username">
            </div>
        </div>
        <div class="row form-group">
            <label for="password" class="col-sm-2 control-label">PASSWORD</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="password" name="password">
            </div>
        </div>
        <div class="row form-group">
            <div class="col text-right">
                <button type="submit" class="btn btn-primary" name="btnSubmit">Thêm</button>
                <input type="button" class="btn btn-primary" id="btnRefreshTaiKhoan" value="Làm mới">
            </div>
        </div>
    </form>
</div>