<div class="container-fluid">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">
            <a href="admin">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="admin/danhsachCauHoi">Danh Sách Bài Thi</a>
        </li>
        <li class="breadcrumb-item">
            Sửa Bài Thi
        </li>
    </ol>
    <form action="admin/suaDScauhoi" method="post" class="form-horizontal">
        <div class="row form-group">
            <label class="col-sm-2 control-label">ID</label>
            <div class="col-md-10">
                <input type="text" readonly class="form-control" id="id" name="id" value="<?php if(!empty($data["dscauhoi"])){echo $data["dscauhoi"]["id"];}?>">
            </div>
        </div>
        <div class="row form-group">
            <label class="col-sm-2 control-label">Tên Bài Thi</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="ten_baithi" name="ten_baithi" value="<?php if(!empty($data["dscauhoi"])){echo $data["dscauhoi"]["ten_baithi"];}?>">
            </div>
        </div>
        <div class="row form-group">
            <label for="capdo" class="col-sm-2 control-label">CẤP ĐỘ</label>
            <div class="col-md-10">
                <select name="capdo" value="<?php if(!empty($data["dscauhoi"])){echo $data["dscauhoi"]["capdo"];}?>">
                <option values="Tiểu Học">Tiểu Học</option>
                <option values="Trung học cơ sở">Trung Học Cơ Sở</option>
                <option values="Trung học Phổ thông">Trung Học Phổ Thông</option>
                </select>
            </div>
        </div>
        <div class="row form-group">
            <label class="col-sm-2 control-label">Ngày Tạo</label>
            <div class="col-md-10">
                <input type="text" readonly class="form-control" id="ngay_tao" name="ngay_tao" value="<?php if(!empty($data["dscauhoi"])){echo $data["dscauhoi"]["ngay_tao"];}?>">
            </div>
        </div>
        <div class="row form-group">
            <label class="col-sm-2 control-label">Trạng Thái</label>
            <div class="col-md-10">
                <input type="radio"  name="trangthai" id="trangthai" class=""  value="ON" <?php if(!empty($data["dscauhoi"])){ if( $data["dscauhoi"]["trangthai"]==="ON") {echo "checked";}}?> >
                <label for="trangthai">ON</label><br>
                <input type="radio"  name="trangthai" id="trangthai" class=""  value="OFF" <?php if(!empty($data["dscauhoi"])){ if( $data["dscauhoi"]["trangthai"]==="OFF") {echo "checked";}}?>  >
                <label for="trangthai">OFF</label><br>
            </div>
        </div>
        <div class="row form-group">
            <div class="col text-right">
                <a class="btn btn-primary" href="" data-toggle="modal" data-target="#exampleModalCenter">Xóa</a>
                <button type="submit" class="btn btn-primary" name="btnSubmit">Sửa</button>
                <a href="admin/danhsachCauHoi" class="btn btn-primary">Hủy</a>
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
                <?php if(!empty($data["dscauhoi"])){
                    echo "Bạn có chắc muốn xóa danh sách  ";
                }
                ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <a class='btn btn-primary' href=<?php if(!empty($data["dscauhoi"])){echo "admin/xoaDScauhoi?id=".$data["dscauhoi"]["id"];}?>>Xóa</a>
            </div>
            </div>
        </div>
    </div>
</div>