<div class="container-fluid">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">
            <a href="admin">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="admin/danhsachTaiKhoan">Quản lý Tài Khoản</a>
        </li>
        <li class="breadcrumb-item">
            Sửa Tài Khoản
        </li>
    </ol>
    <form action="admin/suataikhoan" method="post" class="form-horizontal">
        <div class="row form-group">
            <label class="col-sm-2 control-label">UserName</label>
            <div class="col-md-10">
                <input type="text" readonly class="form-control" id="username" name="username" value="<?php if(!empty($data["taikhoan"])){echo $data["taikhoan"]["username"];}?>">
            </div>
        </div>
        <div class="row form-group">
            <label class="col-sm-2 control-label">Password</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="password" name="password" value="<?php if(!empty($data["taikhoan"])){echo $data["taikhoan"]["password"];}?>">
            </div>
        </div>
        <div class="row form-group">
            <div class="col text-right">
                <a class="btn btn-primary" href="" data-toggle="modal" data-target="#exampleModalCenter">Xóa</a>
                <button type="submit" class="btn btn-primary" name="btnSubmit">Sửa</button>
                <a href="admin/danhsachTaiKhoan" class="btn btn-primary">Hủy</a>
            </div>
        </div>
    </form>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Xác nhận</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php if(!empty($data["taikhoan"])){
                    echo "Bạn có chắc muốn xóa tài khoản ";
                    echo $data["taikhoan"]["username"];
                    echo "?";
                }
                ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <a class='btn btn-primary' href=<?php if(!empty($data["taikhoan"])){echo "admin/xoataikhoan?username=".$data["taikhoan"]["username"];}?>>Xóa</a>
            </div>
            </div>
        </div>
    </div>
</div>