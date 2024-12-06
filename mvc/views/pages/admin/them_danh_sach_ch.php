<div class="container-fluid">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">
            <a href="admin">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="admin/danhsachCauHoi">Danh sách câu hỏi</a>
        </li>
        <li class="breadcrumb-item">
            Thêm Danh Sách Câu Hỏi
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
    <form id="themsinhvien" action="admin/themDScauhoi" method="post" class="form-horizontal">
        <div class="row form-group">
            <label for="id" class="col-sm-2 control-label">ID</label>
            <div class="col-md-10">
            <input type="text" class="form-control" id="id" name="id">
            </div>
        </div>
        <div class="row form-group">
            <label for="ten_baithi" class="col-sm-2 control-label">TÊN BÀI THI</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="ten_baithi" name="ten_baithi">
            </div>
        </div>
        <div class="row form-group">
            <label for="capdo" class="col-sm-2 control-label">CẤP ĐỘ</label>
            <div class="col-md-10">
                <select name="capdo">
                <option values="Tiểu Học">Tiểu Học</option>
                <option values="Trung học cơ sở">Trung Học Cơ Sở</option>
                <option values="Trung học Phổ thông">Trung Học Phổ Thông</option>
                </select>
            </div>
        </div>
        <div class="row form-group">
            <label for="ngay_tao" class="col-sm-2 control-label">NGÀY TẠO</label>
            <div class="col-md-10">
                <input type="text" readonly class="form-control" id="ngay_tao" name="ngay_tao" values="dd/mm/yy" placeholder="dd/mm/yy">
            </div>
        </div>
        <div class="row form-group">
            <label for="trangthai" class="col-sm-2 control-label">TRẠNG THÁI</label>
            <div class="col-md-10">
                <input type="text" readonly class="form-control" id="trangthai" name="trangthau" values="ON" placeholder="Trạng thái">
            </div>
        </div>
        <div class="row form-group">
            <div class="col text-right">
                <button type="submit" class="btn btn-primary" name="btnSubmit">Thêm</button>
                <input type="button" class="btn btn-primary" id="btnRefreshDScauhoi" value="Làm mới">
            </div>
        </div>
    </form>
</div>